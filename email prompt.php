<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "raphael.warui.k@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
}

