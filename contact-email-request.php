<?php
/**
 * send-booking-email.php
 * Receives the Service-Centre booking form (AJAX/POST) and emails a
 * professionally formatted HTML summary to the service desk, sent via
 * PHPMailer over Mailtrap SMTP.
 *
 * SETUP (one-time):
 *   Place the "PHPMailer" folder (containing Exception.php, PHPMailer.php,
 *   SMTP.php) in the SAME folder as this script, then fill in the
 *   MAILTRAP_* values below from your Mailtrap inbox
 *   (Mailtrap dashboard -> Email Testing -> your inbox -> SMTP Settings).
 *
 *   No Composer required — these three files are required directly.
 */

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// ------------------------------------------------------------------
// CONFIGURATION — update these before going live
// ------------------------------------------------------------------

// Where the booking notification should land
$RECIPIENT_EMAIL = "service-desk@yourcompany.com";
$RECIPIENT_NAME  = "Service Centre Team";

// Sender identity shown on the email (can be anything for Mailtrap testing;
// use a real verified domain address once you move to Mailtrap's Sending API
// or production SMTP)
$FROM_EMAIL      = "no-reply@yourcompany.com";
$FROM_NAME       = "Service-Centre Booking System";

$SUPPORT_PHONE   = "1800 891 6626";

// --- Mailtrap SMTP credentials ---
// Find these in: Mailtrap dashboard -> Email Testing -> Inboxes -> [your inbox] -> SMTP Settings
$MAILTRAP_HOST     = "sandbox.smtp.mailtrap.io";   // use "live.smtp.mailtrap.io" for Sending (production)
$MAILTRAP_PORT     = 587;
$MAILTRAP_USERNAME = "75b93f50b1345d";     // replace with your Mailtrap SMTP username
$MAILTRAP_PASSWORD = "3519f33fdd1ef3";     // replace with your Mailtrap SMTP password

// ------------------------------------------------------------------
// 1. ONLY ACCEPT POST
// ------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// ------------------------------------------------------------------
// 2. HELPER — sanitize every incoming value
// ------------------------------------------------------------------
function clean($value) {
    return htmlspecialchars(trim($value ?? ''), ENT_QUOTES, 'UTF-8');
}

$booking_id    = clean($_POST['booking_id']    ?? '');
$product_name  = clean($_POST['product_name']  ?? '');
$product_type  = clean($_POST['product_type']  ?? '');
$brand         = clean($_POST['brand']          ?? '');
$issue         = clean($_POST['issue']          ?? '');
$warranty      = clean($_POST['warranty']       ?? '');
$customer_name = clean($_POST['customer_name']  ?? '');
$mobile        = clean($_POST['mobile']         ?? '');
$address       = clean($_POST['address']        ?? '');
$city          = clean($_POST['city']           ?? '');
$pin           = clean($_POST['pin']            ?? '');

// ------------------------------------------------------------------
// 3. SERVER-SIDE VALIDATION
// ------------------------------------------------------------------
$errors = [];

if ($customer_name === '')                              $errors[] = 'Full name is required.';
if (!preg_match('/^[0-9]{10}$/', $mobile))               $errors[] = 'Enter a valid 10-digit mobile number.';
if ($address === '')                                     $errors[] = 'Address is required.';
if ($city === '')                                        $errors[] = 'City is required.';
if (!preg_match('/^[0-9]{6}$/', $pin))                   $errors[] = 'Enter a valid 6-digit PIN code.';
if (!in_array(strtolower($warranty), ['yes', 'no'], true)) $errors[] = 'Please select a warranty option.';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$warrantyLabel = (strtolower($warranty) === 'yes') ? 'Yes' : 'No';
$submittedOn   = date('d M Y, h:i A');

// ------------------------------------------------------------------
// 4. BUILD THE PROFESSIONAL HTML EMAIL
// ------------------------------------------------------------------
$subject = "New Service Booking #{$booking_id} - {$customer_name}";

$htmlBody = "
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
</head>
<body style='margin:0;padding:0;background:#eef2f9;font-family:Segoe UI, Roboto, Arial, sans-serif;'>
  <table role='presentation' width='100%' cellpadding='0' cellspacing='0' style='background:#eef2f9;padding:30px 0;'>
    <tr>
      <td align='center'>
        <table role='presentation' width='600' cellpadding='0' cellspacing='0' style='background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 4px 18px rgba(0,0,0,0.08);'>

          <!-- Header -->
          <tr>
            <td style='background:#0a1128;border-bottom:3px solid #f4a52c;padding:20px 28px;'>
              <table role='presentation' width='100%'>
                <tr>
                  <td style='color:#ffffff;font-size:18px;font-weight:700;'>Service-Centre</td>
                  <td align='right' style='color:#f4a52c;font-size:12px;font-weight:700;letter-spacing:.05em;'>NEW BOOKING</td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Booking ID banner -->
          <tr>
            <td style='padding:20px 28px 0 28px;'>
              <table role='presentation' width='100%' style='background:linear-gradient(135deg,#0a1128,#16295c);border-radius:8px;'>
                <tr>
                  <td style='padding:14px 18px;'>
                    <span style='color:#c7d0e8;font-size:11px;text-transform:uppercase;letter-spacing:.06em;'>Booking ID</span><br>
                    <span style='color:#f4a52c;font-size:18px;font-weight:700;'>{$booking_id}</span>
                  </td>
                  <td align='right' style='padding:14px 18px;color:#c7d0e8;font-size:12px;'>
                    Submitted:<br>{$submittedOn}
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Product Information -->
          <tr>
            <td style='padding:26px 28px 0 28px;'>
              <div style='font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#1f96b0;border-bottom:2px solid #e4e9f2;padding-bottom:6px;margin-bottom:12px;'>
                Product Information
              </div>
              <table role='presentation' width='100%' style='font-size:14px;color:#0a1128;'>
                <tr>
                  <td style='padding:6px 0;width:50%;'><strong>Product Name:</strong><br>{$product_name}</td>
                  <td style='padding:6px 0;width:50%;'><strong>Product Type:</strong><br>{$product_type}</td>
                </tr>
                <tr>
                  <td style='padding:6px 0;'><strong>Brand:</strong><br>{$brand}</td>
                  <td style='padding:6px 0;'><strong>Issue:</strong><br>{$issue}</td>
                </tr>
                <tr>
                  <td style='padding:6px 0;' colspan='2'>
                    <strong>Warranty:</strong>
                    <span style='display:inline-block;margin-left:6px;padding:3px 12px;border-radius:20px;font-size:12px;font-weight:700;
                      background:" . (strtolower($warranty) === 'yes' ? '#e6f7ee;color:#1a9a5e' : '#fdeceb;color:#c0392b') . ";'>
                      {$warrantyLabel}
                    </span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Customer Information -->
          <tr>
            <td style='padding:22px 28px 0 28px;'>
              <div style='font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#1f96b0;border-bottom:2px solid #e4e9f2;padding-bottom:6px;margin-bottom:12px;'>
                Customer Information
              </div>
              <table role='presentation' width='100%' style='font-size:14px;color:#0a1128;'>
                <tr>
                  <td style='padding:6px 0;width:50%;'><strong>Full Name:</strong><br>{$customer_name}</td>
                  <td style='padding:6px 0;width:50%;'><strong>Mobile:</strong><br>{$mobile}</td>
                </tr>
                <tr>
                  <td style='padding:6px 0;' colspan='2'><strong>Address:</strong><br>{$address}</td>
                </tr>
                <tr>
                  <td style='padding:6px 0;width:50%;'><strong>City:</strong><br>{$city}</td>
                  <td style='padding:6px 0;width:50%;'><strong>PIN Code:</strong><br>{$pin}</td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- CTA -->
          <tr>
            <td style='padding:26px 28px;'>
              <table role='presentation' width='100%'>
                <tr>
                  <td align='center' style='background:#2fb8d4;border-radius:8px;padding:12px;'>
                    <a href='tel:{$mobile}' style='color:#ffffff;text-decoration:none;font-weight:700;font-size:14px;'>
                      Call Customer: {$mobile}
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style='background:#f7f9fc;padding:16px 28px;border-top:1px solid #e4e9f2;text-align:center;'>
              <p style='margin:0;font-size:12px;color:#7c869c;'>
                This is an automated notification from the Service-Centre booking system.<br>
                For assistance, call {$SUPPORT_PHONE}.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
";

// ------------------------------------------------------------------
// 5. PLAIN-TEXT FALLBACK (for clients that don't render HTML)
// ------------------------------------------------------------------
$textBody = "New Service Booking #{$booking_id}\n"
    . "Submitted: {$submittedOn}\n\n"
    . "PRODUCT INFORMATION\n"
    . "Product Name: {$product_name}\n"
    . "Product Type: {$product_type}\n"
    . "Brand: {$brand}\n"
    . "Issue: {$issue}\n"
    . "Warranty: {$warrantyLabel}\n\n"
    . "CUSTOMER INFORMATION\n"
    . "Name: {$customer_name}\n"
    . "Mobile: {$mobile}\n"
    . "Address: {$address}\n"
    . "City: {$city}\n"
    . "PIN: {$pin}\n";

// ------------------------------------------------------------------
// 6. SEND THE EMAIL VIA PHPMAILER + MAILTRAP SMTP
// ------------------------------------------------------------------
$mail = new PHPMailer(true); // true = enable exceptions

try {
    // --- Server settings ---
    $mail->isSMTP();
    $mail->Host       = $MAILTRAP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = $MAILTRAP_USERNAME;
    $mail->Password   = $MAILTRAP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // STARTTLS on port 587
    $mail->Port       = $MAILTRAP_PORT;

    // --- Recipients ---
    $mail->setFrom($FROM_EMAIL, $FROM_NAME);
    $mail->addAddress($RECIPIENT_EMAIL, $RECIPIENT_NAME);
    $mail->addReplyTo($FROM_EMAIL, $FROM_NAME);

    // --- Content ---
    $mail->isHTML(true);
    $mail->Subject      = $subject;
    $mail->Body         = $htmlBody;
    $mail->AltBody      = $textBody; // plain-text fallback
    $mail->CharSet      = 'UTF-8';

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => "Booking #{$booking_id} confirmed. Details have been emailed to our service desk."
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Booking could not be emailed right now. Please try again or call ' . $SUPPORT_PHONE . '.',
        'debug'   => $mail->ErrorInfo // remove or comment out in production
    ]);
}
