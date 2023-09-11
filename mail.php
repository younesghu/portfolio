<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "younesghu44@gmail.com";

    $subject = "Contact Form Submission from $name";
    $txt = "Name: \n" . $name . "Email: \n" . $email . "Message:\n" . $message;

    $headers = "From: $email";

    if ($email!=NULL) {
        mail($to, $subject, $txt, $headers);
    }
    header("Location:thankyou.html");

?>