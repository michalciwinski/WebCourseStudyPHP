<?php

//Information about SMTP server are needed

$recipient_email = '***'; //hide it!!!
$subject = $_POST['subject'];
$message = $_POST['message'];
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (empty($subject) || empty($message) || empty($sender_name) || empty($sender_email)) {
    echo "All fields has to be fullfilled.";
    exit;
}

$mail_success = mail($recipient_email, $subject, $message, $headers);

if ($mail_success) {
    echo "Email sent succesfully.";
} else {
    echo "There was a problem. Please try again later.";
}