<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email settings
    $to = "campuscode.dtu@gmail.com";  // Replace with your email address
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Format the email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Subject: $subject\n";
    $emailContent .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you, your message has been sent!";
    } else {
        echo "Oops! Something went wrong, please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
