<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "alekatem77@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Use a verified email from your domain
    $from = "noreply@madeinturkana.com";
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        // Display a message and then redirect after 1 seconds
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Thank You</title>";
        echo "<script type='text/javascript'>
                setTimeout(function(){
                    window.location.href = 'https://alek.madeinturkana.com';
                }, 3000); // Redirect after 1 seconds
              </script>";
        echo "</head>";
        echo "<body>";
        echo "<p>Thank you for your message. It has been sent.</p>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?> 