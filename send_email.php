<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sergio.castano.1@gmail.com"; // Replace with the recipient's email address
    $subject = "New Message from Contact Form";
    $headers = "From: $email";

    // You can customize the email message here
    $emailBody = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
