<?php
$emailAddress = $_POST['emailAddress'];
$emailtitle = $_POST['emailtitle'];
$emailContent = $_POST['emailContent'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
// 
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'abc123';// SMTP username
    $mail->Password = 'abc123'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('abc123', 'admin');
      
    $mail->addAddress("$emailAddress"); // Add a recipient
    
    // Attachments
    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf', $data[11].'_2.pdf'); // Optional name

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $tieude =  "$emailtitle";
    $mail->Subject = "$tieude";
    
    // Mail body content 
    
    $mail->Body = "$emailContent";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'success';
    }else{
        echo 'error';
    }  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
