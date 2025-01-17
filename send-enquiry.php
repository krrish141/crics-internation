<?php
$to = "enquiry@cricsinternational.in";

// Retrieve form values
$name = $_POST['name']; 
$mobile = $_POST['Mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate form fields
if (empty($name) || empty($mobile) || empty($email) || empty($message)) {
    echo "All fields are required. Please go back and fill in the form completely.";
    exit;
}

// Construct email headers and body
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$subject = "Website Contact - Crics International";
$body = "We have received the following information:\n\n";
$body .= "Name: $name\n";
$body .= "Phone No: $mobile\n";
$body .= "Email ID: $email\n";
$body .= "Message: $message\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    header("Location: thankyou.php");
} else {
    echo "We encountered an error sending your email. Please try again later.";
}
?>
