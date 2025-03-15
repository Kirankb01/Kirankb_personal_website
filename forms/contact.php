<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    $to = "kirankb601@gmail.com"; // Replace with your email
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $fullMessage = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request.";
}
?>
