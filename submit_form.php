<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Here, you can add code to send an email or store the data
    // For example, to send an email:
    $to = 'kai.li0702@hotmail.com'; // Change this to your email address
    $subject = 'Message from Portfolio Website';
    $body = "From: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
} else {
    echo 'Form is not submitted.';
}
?>
