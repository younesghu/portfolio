<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "younesghu44@gmail.com";

    $subject = "Contact Form Submission from $name";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>