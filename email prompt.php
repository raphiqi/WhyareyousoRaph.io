<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields - you can display an error message
        echo "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email format - you can display an error message
        echo "Invalid email format.";
    } else {
        $to = "raphael.warui.k@gmail.com";
        $subject = "New Contact Form Submission from $name";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully - display a confirmation message
            echo "Thank you for your message. We will get back to you soon.";
        } else {
            // Error sending email - display an error message
            echo "Sorry, there was an issue sending your message. Please try again later.";
        }
    }
}


