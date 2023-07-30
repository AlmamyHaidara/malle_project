<?php
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['sendForm'])) {
    extract($_POST);
    $mail = new PHPMailer(true);

    $yourEmail = "moussa@gmaill.com";
    $yourPassword = "0000";
    $yourFirstName = "Moussa";
    $yourlast = "Malle";
    $mail->isSMTP();
    $mail->Mailer = "smtp";
    try {
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $yourEmail;
        $mail->Password = $yourPassword;

        $mail->setFrom('almamyh27@gmail.com', 'Almamy ');

        $mail->isHTML(true);
        $mail->addAddress($email);
        $mail->addAddress($email, $nom . ' ' . $prenom);
        $mail->setFrom($yourEmail, $yourFirstName . " " . $yourlast);

        $mail->Subject = 'Subject of your email';
        $mail->Body = $msg;

        $mail->send();
        if ($mail->send()) {

            header("location: index.php");
            exit();
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
