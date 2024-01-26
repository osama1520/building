<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'index.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
function sendEmail($emailData) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'osama29craft@gmail.com';
    $mail->Password = 'jfgjochpkczlaond';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom('osama29craft@gmail.com', 'Osama');
    $mail->addAddress('osamasiddique1520@gmail.com');
    $mail->Subject = 'Rent Summary of ' . date('F');
    $mail->Body = $emailData;
    try {
        $mail->send();
        echo 'Email sent successfully';
        
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

//sendEmail($emailData);
// Call the function with the email data;
//sendEmail($emailData);
if (date('j') == 1) {
    // Call the function with the email data;
    sendEmail($emailData);
    resetMonthly();
}
?>
