<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email or save message to a database here (you may need to configure email settings)
    $to = "tommyrobertsms@gmail.com"; // Replace with your email address
    $subject = "Message from your website";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect back to the contact page with a success message
    header("Location: contact.html?status=success");
} else {
    // Redirect back to the contact page with an error message
    header("Location: contact.html?status=error");
}
?>