<?php

namespace app\src;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    private $sendMailStatus;

    public function sendMail()
    {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'c31ea72524bfe2';
        $mail->Password = 'e2fba16fd20745';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('email@enviaemail.com', 'Email');
        $mail->addAddress('enviado@enviaemail.com', 'EnviaEmail');

        $mail->isHTML(true);
        $mail->Subject = 'Assunto do Email';
        $mail->Body = 'Texto do <b>Email</b> em HTML';
        $mail->AltBody = 'Texto do Email em texto puro';

        try {
            $mail->send();
        } catch (Exception $e) {
            $this->setSendMailStatus("Email erro: {$mail->ErrorInfo}");
        }

        echo $this->getSendMailStatus();
    }

    public function getSendMailStatus()
    {
        return $this->sendMailStatus;
    }

    public function setSendMailStatus($sendMailStatus)
    {
        $this->sendMailStatus = $sendMailStatus;
    }
}