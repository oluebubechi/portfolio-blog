<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Check if inputs are not empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Send email here using a mail function or a third-party email library
            $to = "emmanuelokechukwu49890@gmail.com";
            $subject = "Contact Form";
            $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

            // Construct the email body
            $emailBody = "Name: $name" . "\n";
            $emailBody .= "Email: $email" . "\n";
            $emailBody .= "Message: $message" . "\n";

            // Send the email
            mail($to, $subject, $emailBody, $headers);

            // Redirect or display success message
            echo "Email sent successfully!";
        } else {
            echo "Invalid email address";
        }
    } else {
        echo "Please fill in all fields";
    }
} else {
    echo "Invalid request";
}
?>