<?php
// Permanent redirect to contact.php questions section
header("Location: contact.php#questions", true, 301);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0;url=contact.php#questions">
    <title>Redirecting to Questions &amp; FAQs - WorkForce2047</title>
</head>
<body>
    <p>Redirecting to <a href="contact.php#questions">Frequently Asked Questions on Contact Page</a>...</p>
    <script>
        window.location.href = "contact.php#questions";
    </script>
</body>
</html>
