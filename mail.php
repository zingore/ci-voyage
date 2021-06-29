<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mail
{
    public static function senMail($body)
    {
        $Mail = new PHPMailer();
        $Mail->isSMTP();
        $Mail->SMTPAuth = true;
        $Mail->SMTPSecure = "tls ";
        $Mail->Host = 'smtp.gmail.com';
        $Mail->port = '587';
        $Mail->isHTML();
        $Mail->Username = "bot.cameleon@gmail.com";
        $Mail->Password = "mybot333";
        $Mail->setFrom("bot.cameleon@gmail.com");
        $Mail->Subject = "Commentaire";
        $Mail->Body = $body;
        $Mail->addAddress("titotitosimo06@gmail.com");

        $Mail->Send();

        // if (!$Mail->send()) {
        //     echo 'Message could not be sent. ';
        //     echo 'Mailer Error: ' . $Mail->ErrorInfo;
        //     exit;
        // }
    }
}
