<?php
// Load the PHPMailer library
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // replace with your SMTP provider's hostname
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com'; // replace with your SMTP account username
$mail->Password = 'your_password'; // replace with your SMTP account password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Message configuration
$to = '09603303447@smart1.com.ph'; // replace with the Smart phone number in the format [phone number]@[sms provider domain]
$mail->setFrom('your_email@gmail.com', 'Your Name');
$mail->addAddress($to);
$mail->Subject = 'New message from contact form';
$mail->Body = 'This is a test message.';

// Send the message
if ($mail->send()) {
    echo 'Message sent successfully!';
} else {
    echo 'Oops! Something went wrong: ' . $mail->ErrorInfo;
}
