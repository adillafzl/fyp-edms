<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']))
{
    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $message = $_POST['message'];


    $mpdf = new \Mpdf\Mpdf();

    $data = "";

    $data .= "<h1>Your Details</h1>";

    $data .= "<strong>First Name</strong> " . $fname . "<br>";

    $data .= "<strong>Last Name</strong> " . $lname . "<br>";

    $data .= "<strong>Email</strong> " . $email . "<br>";

    $data .= "<strong>Message</strong> " . $message . "<br>";

    $mpdf->WriteHtml($data);

    //$mpdf->output("myfile.pdf","D");   
    $pdf = $mpdf->output("","S");

    sendEmail($pdf); 
}

    function sendEmail($pdf,$data){

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'adillafaizal@gmail.com';                     // SMTP username
            $mail->Password   = 'xpmdxrfsuxwoognm';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('adillafaizal@gmail.com', 'Mailer');
            $mail->addAddress('adillafaizal@gmail.com', 'Farahhae');     // Add a recipient
            $mail->addAddress('adillafaizal@gmail.com');               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

            // Attachments
            $mail->addStringAttachment($pdf,"attachment.pdf");         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }


?>
<!DOCTYPE html>
<html>
<head>
<title>Generating PDF from HTML fORM using MPDF Library</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">

    <h1>Send PDF as Attachement</h1>

    <p>Fill out the Details to generate the pdf</p>

    <form action="blankformemail" method="post">

        <input type="text" name="fname" class="form-control" placeholder="First name" required> </br>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" required> </br>
        <input type="text" name="email" class="form-control" placeholder="Email" required> </br>
        <textarea class="form-control" name="msg" placeholder="Message"> 
        
        </textarea> </br>
        <button class="btn btn-success" type="submit">Send</button>
        </form>

</div>
</body>
</html>
