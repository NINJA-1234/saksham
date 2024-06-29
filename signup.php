<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Email details
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Sign Up Information";
    $message = "Name: $name\nEmail: $email\nPassword: $password";
    $headers = "From: noreply@yourdomain.com"; // Replace with your domain

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "There was an error, please try again.";
    }
}
?>
