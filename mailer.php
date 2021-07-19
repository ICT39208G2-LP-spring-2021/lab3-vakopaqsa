<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/phpmailer/phpmailer/src/Exception.php';
require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';

function verifymeil($ml , $name , $msg){

// passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = 'artur.gasparyan060270@gmail.com'; // YOUR gmail email
        $mail->Password = 'artur060270'; // YOUR gmail password

        // Sender and recipient settings
        $mail->setFrom('example@gmail.com', 'Admin');
        $mail->addAddress($ml, $name);
        $mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = "Verify";
        $mail->Body = "$msg";
        $mail->AltBody = 'Thnk u';

        $mail->send();
        $mail_succ =  "Email message sent.";
    } catch (Exception $e) {
        $mail_succ = "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
}



?>