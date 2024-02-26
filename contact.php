<?php
// Receiving email address
$to_email = "elvis4real28@gmail.com";

// Fetching Values from URL
$name = $_POST['ajax_name'];
$email = $_POST['ajax_email'];
$message = $_POST['ajax_message'];

// Sanitize email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email subject
    $subject = "Message from Contact Form";

    // Email message
    $email_message = "
        <html>
        <head>
        <title>New Message from Contact Form</title>
        </head>
        <body>
        <h2>New Message from Contact Form</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
        </body>
        </html>
        ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Attempt to send email
    if (mail($to_email, $subject, $email_message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
