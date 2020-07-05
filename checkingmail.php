
<?php
$to_email = "fypfarah@gmail.com";
$subject = "PHP Email with Attachment by Farahhae";
$body = "PHP Email with Attachment by Farahhae
    This email is sent from the PHP script with attachment.";
$headers = "From: XAMPP server";

// Attachment file
$file = "downloads/TestPlan.doc";
//$attributes (mixed) – HTML attributes

if (mail($to_email, $subject, $body, $headers,$file)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
