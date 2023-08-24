<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // You can perform validation here, like checking if fields are not empty

    // Example: Sending an email
    $to = 'recipient@example.com';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // This response can be used for AJAX requests
    } else {
        echo "error";   // This response can indicate that the email couldn't be sent
    }
} else {
    echo "Method not allowed"; // In case someone tries to directly access the PHP file
}
?>
