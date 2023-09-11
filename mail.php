<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the email (you can use a library like filter_var for more thorough validation)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Compose and send the email (you should configure your server for sending email)
        $to = 'younesghu44@gmail.com'; // Replace with your email address
        $subject = 'Contact Form Submission';
        $headers = "From: $email\r\n";
        $message = "Name: $name\r\nEmail: $email\r\nMessage:\r\n$message";

        if (mail($to, $subject, $message, $headers)) {
            $response = ['success' => true, 'message' => 'Thank you for contacting us! We will get back to you soon.'];
        } else {
            $response = ['success' => false, 'message' => 'Sorry, something went wrong. Please try again later.'];
        }
    } else {
        $response = ['success' => false, 'message' => 'Invalid email address.'];
    }

    // Return a JSON response to the frontend
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Method not allowed';
}
?>