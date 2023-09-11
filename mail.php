<?php

    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $usermessage = $_POST["message"];
    $subject = "test";

    $data = "From: ".$username."<".$useremail.">\r\n";

    $to = "younesghu44@gmail.com";

    mail($to,$subject,$message,$data)
    or die("Error!");

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank you</title>
        <link rel="stylesheet" href="assets/css/meyawo.css">

    </head>
    <body>
        <div class="thankyou">
            <h6>Thank you for contacting me.</h6>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        </div>
    </body>
    </html>
    
    ';
?>