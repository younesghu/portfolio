<?php
if(isset($_POST['send'])){
    $name = $_POST['username'];
    $email_from = $_POST['useremail'];
    $message = $_POST['usermessage'];
    $email_to = $_POST["younesghu44@gmail.com"];

    $mailheaders = "Username : " . $name . 
    "\r\n Email from : " . $email_from .
    "\r\n Message content : " . $message;

    mail($email_to, $txt, $headers);
    mailheaders("Location: index.html?mailsend");
}
?>