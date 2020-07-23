
<?php
$to_email =$_POST["email"];
$subject = "NETDOC.COM notification";
$body = "You may have new document to sign. Please check your inbox by click this link
https://fypfarah.herokuapp.com/.";
$headers = "From: NETDOC.COM";

// Attachment file
$file = "downloads/TestPlan.doc";
//$attributes (mixed) – HTML attributes

if (mail($to_email, $subject, $body, $headers,$file)) {
    $message = "Email successfully sent to $to_email";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //header("Location: documents");
} 
else {
    echo "Email sending failed...";
}
