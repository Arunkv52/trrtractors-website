<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $mobile   = htmlspecialchars($_POST['mobile']);
    $location = htmlspecialchars($_POST['location']);

    // Recipient email
    $to = "youremail@example.com"; // Change this to your email address

    // Subject
    $subject = "New Contact Form Submission";

    // Message
    $message = "You have received a new form submission:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Location: $location\n";

    // Headers
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error: Unable to send your message.";
    }
}
?>
