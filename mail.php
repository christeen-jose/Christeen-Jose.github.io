<?php

$to = "christeenjose11@gmail.com";
$subject = "Contact Form Submission";
$message = $_POST['message'];

// Get the uploaded file
$file = $_FILES['upload'];

// Create an email attachment
$attachment = new PHPMailer\PHPMailer\PHPMailer();
$attachment->setFrom('no-reply@example.com');
$attachment->addAddress($to);
$attachment->Subject = $subject;
$attachment->Body = $message;
$attachment->addAttachment($file['tmp_name'], $file['name']);

// Send the email
$attachment->send();

?>
