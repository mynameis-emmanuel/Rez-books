<?php
// Save this file as sendEmail.php

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

$bookTitle = $data['title'];

// Email details
$to = 'nothere038@outlook.com';
$subject = 'Book Purchase Notification';
$message = 'A book has been purchased: ' . $bookTitle;
$headers = 'From: your-email@gmail.com' . "\r\n" .
           'Reply-To: your-email@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
