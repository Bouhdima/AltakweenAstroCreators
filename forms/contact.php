<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Recipient email
    $recipient = "bouhdimabster@gmail.com";

    // Email headers
    $mail_headers = "From: $name <$email>";

    // Send email
    if(mail($recipient, $subject, $message, $mail_headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
