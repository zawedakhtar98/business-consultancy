<?php

/**
 * contact-email-action.php
 * Handles Direct Consultation inquiries from the Contact Us page (contact.php)
 * Sends an executive-styled HTML email notification via PHPMailer over SMTP (Mailtrap/Production)
 * and returns structured JSON for AJAX clients.
 *
 * WorkForce2047 Partners LLP - Workforce Advisory & Apprenticeship Solutions
 */

// Enable error logging while suppressing raw output in JSON response
ini_set('display_errors', '0');
error_reporting(E_ALL);

// Locate and load PHPMailer (supports vendor/PHPMailer or root PHPMailer)
if (file_exists(__DIR__ . '/vendor/PHPMailer/PHPMailer.php')) {
  require __DIR__ . '/vendor/PHPMailer/Exception.php';
  require __DIR__ . '/vendor/PHPMailer/PHPMailer.php';
  require __DIR__ . '/vendor/PHPMailer/SMTP.php';
} elseif (file_exists(__DIR__ . '/PHPMailer/PHPMailer.php')) {
  require __DIR__ . '/PHPMailer/Exception.php';
  require __DIR__ . '/PHPMailer/PHPMailer.php';
  require __DIR__ . '/PHPMailer/SMTP.php';
} else {
  http_response_code(500);
  header('Content-Type: application/json; charset=UTF-8');
  echo json_encode([
    'success' => false,
    'message' => 'Mailer library configuration missing. Please contact info@workforce2047partners.com directly.'
  ]);
  exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=UTF-8');

// ------------------------------------------------------------------
// CONFIGURATION — WorkForce2047 Inquiries Configuration
// ------------------------------------------------------------------

// Where direct consultation inquiries should land
$RECIPIENT_EMAIL = "info@workforce2047partners.com";
$RECIPIENT_NAME  = "WorkForce2047 Advisory Team";

// Sender identity
$FROM_EMAIL      = "info@workforce2047partners.com";
$FROM_NAME       = "WorkForce2047 Contact Inquiries";

// Office & support details
$COMPANY_NAME    = "WorkForce2047 Partners LLP";
$OFFICE_LOCATION = "Bengaluru (HO)";
$WEBSITE_URL     = "https://workforce2047partners.com/";

// --- SMTP credentials (configured with Mailtrap for testing, switch to production as needed) ---
$MAILTRAP_HOST     = "smtp.stackmail.com";
$MAILTRAP_PORT     = 587;
$MAILTRAP_USERNAME = "info@workforce2047partners.com";
$MAILTRAP_PASSWORD = "****";
// $MAILTRAP_HOST     = "sandbox.smtp.mailtrap.io";
// $MAILTRAP_PORT     = 587;
// $MAILTRAP_USERNAME = "75b93f50b1345d";
// $MAILTRAP_PASSWORD = "3519f33fdd1ef3";

// ------------------------------------------------------------------
// 1. ONLY ACCEPT POST REQUESTS
// ------------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode([
    'success' => false,
    'message' => 'Method Not Allowed. Please submit the form.'
  ]);
  exit;
}

// ------------------------------------------------------------------
// 2. SANITIZE INCOMING INPUTS
// ------------------------------------------------------------------
function clean_field($value)
{
  return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}

$name    = clean_field($_POST['name'] ?? '');
$company = clean_field($_POST['company'] ?? '');
$email   = filter_var(trim((string)($_POST['email'] ?? '')), FILTER_SANITIZE_EMAIL);
$phone   = clean_field($_POST['phone'] ?? '');
$message = clean_field($_POST['message'] ?? '');

// ------------------------------------------------------------------
// 3. SERVER-SIDE VALIDATION
// ------------------------------------------------------------------
$errors = [];

if ($name === '') {
  $errors[] = 'Full name is required.';
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
  $errors[] = 'Full name must be between 2 and 100 characters.';
}

if ($company === '') {
  $errors[] = 'Company name is required.';
} elseif (mb_strlen($company) < 2 || mb_strlen($company) > 150) {
  $errors[] = 'Company name must be between 2 and 150 characters.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
  $errors[] = 'Please provide a valid business email address.';
}

if ($phone === '') {
  $errors[] = 'Mobile number is required.';
} elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
  $errors[] = 'Please enter a valid 10-digit mobile number containing numbers only.';
}

if (!empty($errors)) {
  http_response_code(422);
  echo json_encode([
    'success' => false,
    'message' => implode(' ', $errors),
    'errors'  => $errors
  ]);
  exit;
}

// Metadata for the inquiry
$inquiryId    = 'WF-' . date('ymd') . '-' . strtoupper(substr(uniqid(), -4));
$submittedOn  = date('d M Y, h:i A') . ' IST';
$messageDisplay = ($message !== '') ? nl2br($message) : '<em>No additional specific requirements provided.</em>';
$cleanPhoneForTel = preg_replace('/[^0-9+]/', '', $phone);
$urlEncodedCompany = urlencode($company);

// ------------------------------------------------------------------
// 4. BRANDED HTML EMAIL TEMPLATE (WORKFORCE2047 PARTNERS LLP)
// ------------------------------------------------------------------
$subject = "New Consultation Inquiry: {$name} ({$company}) [{$inquiryId}]";

$htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$subject}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #EEF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #1E293B;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #EEF2F7; padding: 32px 12px;">
    <tr>
      <td align="center">
        <!-- Main Card Container -->
        <table role="presentation" width="100%" style="max-width: 620px; background-color: #FFFFFF; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(11, 46, 92, 0.08); border: 1px solid #E2E8F0;" cellpadding="0" cellspacing="0">

          <!-- Gold Accent Bar -->
          <tr>
            <td style="background-color: #D4A017; height: 5px; font-size: 0; line-height: 0;">&nbsp;</td>
          </tr>

          <!-- Header -->
          <tr>
            <td style="background: #0B2E5C; padding: 26px 32px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="middle">
                    <div style="font-size: 22px; font-weight: 800; color: #FFFFFF; letter-spacing: -0.01em; line-height: 1.2;">
                      WorkForce <span style="color: #D4A017;">2047 Partners</span><sup style="font-size: 10px; color: #D4A017; vertical-align: super;">TM</sup> <span style="font-size: 14px; font-weight: 500; color: #CBD5E1;">LLP</span>
                    </div>
                    <div style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.08em; margin-top: 4px; font-weight: 600;">
                      Workforce Advisory &bull; Apprenticeship &bull; Compliance &bull; Staffing
                    </div>
                  </td>
                  <td align="right" valign="middle">
                    <span style="display: inline-block; background-color: rgba(212, 160, 23, 0.18); border: 1px solid rgba(212, 160, 23, 0.6); color: #F1C40F; font-size: 10px; font-weight: 700; padding: 5px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.06em;">
                      Direct Inquiry
                    </span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Inquiry Meta Ribbon -->
          <tr>
            <td style="background-color: #071C38; padding: 12px 32px; border-top: 1px solid rgba(255,255,255,0.08);">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size: 12px; color: #CBD5E1;">
                <tr>
                  <td>
                    <span style="color: #94A3B8; text-transform: uppercase; font-size: 10px; letter-spacing: 0.05em;">Reference ID:</span>
                    <strong style="color: #FFFFFF; font-family: monospace; font-size: 13px; margin-left: 4px;">{$inquiryId}</strong>
                  </td>
                  <td align="right">
                    <span style="color: #94A3B8;">Received:</span> <strong style="color: #FFFFFF;">{$submittedOn}</strong>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Body Content Area -->
          <tr>
            <td style="padding: 32px 32px 24px 32px;">

              <!-- Introduction -->
              <p style="margin: 0 0 20px 0; font-size: 15px; line-height: 1.5; color: #334155;">
                A new workforce consultation inquiry has been submitted through the direct contact form on the website. Below are the prospect's details:
              </p>

              <!-- Section: Prospect Information -->
              <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #0B2E5C; border-bottom: 2px solid #E2E8F0; padding-bottom: 8px; margin-bottom: 14px;">
                Client &amp; Organization Profile
              </div>

              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #E2E8F0; border-radius: 8px; overflow: hidden; font-size: 14px; margin-bottom: 24px;">
                <tr style="background-color: #F8FAFC;">
                  <td style="padding: 12px 16px; width: 35%; color: #64748B; font-weight: 600; border-bottom: 1px solid #E2E8F0;">
                    Contact Name
                  </td>
                  <td style="padding: 12px 16px; width: 65%; color: #0B2E5C; font-weight: 700; border-bottom: 1px solid #E2E8F0;">
                    {$name}
                  </td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; color: #64748B; font-weight: 600; border-bottom: 1px solid #E2E8F0;">
                    Organization / Company
                  </td>
                  <td style="padding: 12px 16px; color: #0F172A; font-weight: 600; border-bottom: 1px solid #E2E8F0;">
                    {$company}
                  </td>
                </tr>
                <tr style="background-color: #F8FAFC;">
                  <td style="padding: 12px 16px; color: #64748B; font-weight: 600; border-bottom: 1px solid #E2E8F0;">
                    Business Email
                  </td>
                  <td style="padding: 12px 16px; border-bottom: 1px solid #E2E8F0;">
                    <a href="mailto:{$email}?subject=Regarding%20Your%20Inquiry%20to%20WorkForce2047" style="color: #0B2E5C; font-weight: 600; text-decoration: underline;">
                      {$email}
                    </a>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; color: #64748B; font-weight: 600;">
                    Mobile Number
                  </td>
                  <td style="padding: 12px 16px;">
                    <a href="tel:{$cleanPhoneForTel}" style="color: #0B2E5C; font-weight: 600; text-decoration: none;">
                      {$phone}
                    </a>
                  </td>
                </tr>
              </table>

              <!-- Section: Specific Requirements / Message -->
              <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #0B2E5C; border-bottom: 2px solid #E2E8F0; padding-bottom: 8px; margin-bottom: 14px;">
                Message / Workforce Objectives
              </div>

              <div style="background-color: #F8FAFC; border-left: 4px solid #D4A017; border-radius: 0 8px 8px 0; padding: 18px 20px; font-size: 14px; line-height: 1.6; color: #334155; margin-bottom: 28px; border-top: 1px solid #E2E8F0; border-right: 1px solid #E2E8F0; border-bottom: 1px solid #E2E8F0;">
                {$messageDisplay}
              </div>

              <!-- Quick Action Buttons -->
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 10px;">
                <tr>
                  <td align="center">
                    <table role="presentation" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" style="background-color: #0B2E5C; border-radius: 6px; padding: 12px 22px;">
                          <a href="mailto:{$email}?subject=Regarding%20Your%20Inquiry%20to%20WorkForce2047" style="color: #FFFFFF; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-block;">
                            &#9993;&nbsp;&nbsp;Reply to {$name}
                          </a>
                        </td>
                        <td width="14">&nbsp;</td>
                        <td align="center" style="background-color: #F1F5F9; border: 1px solid #CBD5E1; border-radius: 6px; padding: 12px 22px;">
                          <a href="tel:{$cleanPhoneForTel}" style="color: #0B2E5C; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-block;">
                            &#9742;&nbsp;&nbsp;Call {$phone}
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #071C38; padding: 24px 32px; border-top: 1px solid #E2E8F0; text-align: center;">
              <p style="margin: 0 0 6px 0; font-size: 13px; font-weight: 700; color: #FFFFFF;">
                WorkForce2047 Partners LLP
              </p>
              <p style="margin: 0 0 10px 0; font-size: 12px; color: #94A3B8; line-height: 1.5;">
                {$OFFICE_LOCATION}, India &bull;
                <a href="mailto:{$RECIPIENT_EMAIL}" style="color: #D4A017; text-decoration: none;">{$RECIPIENT_EMAIL}</a> &bull;
                <a href="{$WEBSITE_URL}" style="color: #D4A017; text-decoration: none;">{$WEBSITE_URL}</a>
              </p>
              <p style="margin: 0; font-size: 11px; color: #64748B;">
                This is an automated dispatch from the Contact Us form on {$WEBSITE_URL}.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
HTML;

// ------------------------------------------------------------------
// 5. PLAIN-TEXT FALLBACK
// ------------------------------------------------------------------
$plainMessage = ($message !== '') ? $message : 'None provided.';
$textBody = <<<TEXT
================================================================================
WORKFORCE2047 PARTNERS LLP - DIRECT CONSULTATION INQUIRY
================================================================================
Reference ID : {$inquiryId}
Received On  : {$submittedOn}

CLIENT & ORGANIZATION PROFILE
--------------------------------------------------------------------------------
Full Name    : {$name}
Company Name : {$company}
Email        : {$email}
Phone        : {$phone}

SPECIFIC REQUIREMENTS / MESSAGE
--------------------------------------------------------------------------------
{$plainMessage}

--------------------------------------------------------------------------------
WorkForce2047 Partners LLP - Bengaluru (HO), India
Email: {$RECIPIENT_EMAIL} | Website: {$WEBSITE_URL}
================================================================================
TEXT;

// ------------------------------------------------------------------
// 6. DISPATCH EMAIL VIA PHPMAILER
// ------------------------------------------------------------------
$mail = new PHPMailer(true);

try {
  // Server settings
  $mail->isSMTP();
  $mail->Host       = $MAILTRAP_HOST;
  $mail->SMTPAuth   = true;
  $mail->Username   = $MAILTRAP_USERNAME;
  $mail->Password   = $MAILTRAP_PASSWORD;
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = $MAILTRAP_PORT;
  $mail->CharSet    = 'UTF-8';

  // Recipients
  $mail->setFrom($FROM_EMAIL, $FROM_NAME);
  $mail->addAddress($RECIPIENT_EMAIL, $RECIPIENT_NAME);
  $mail->addAddress($email, $RECIPIENT_NAME);
  // Setting Reply-To as the client allows direct email reply to the prospective client
  $mail->addReplyTo($email, $name);

  // Content
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = $htmlBody;
  $mail->AltBody = $textBody;

  $mail->send();

  echo json_encode([
    'success' => true,
    'message' => "Thank you, {$name}. Your consultation request has been received. A workforce expert will connect with you within 24 hours.",
    'ref_id'  => $inquiryId
  ]);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode([
    'success' => false,
    'message' => "We were unable to transmit your request automatically. Please email us directly at {$RECIPIENT_EMAIL}.",
    'debug'   => $mail->ErrorInfo
  ]);
}
