<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct()  {

        $this->mail = new PHPMailer(true);

        $this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $this->mail->isSMTP();                                            // Set mailer to use SMTP
        $this->mail->Host = ' email-ssl.com.br';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = 'contato@danilomarcus.com.br';                     // SMTP username
        $this->mail->Password = 'Danilo86/*';                               // SMTP password
        $this->mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 465;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('contato@danilomarcus.com.br', 'Contato Danilo');
    }

    public function sendMail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName) {

        $this->mail->Subject = (string) $subject;
        $this->mail->Body = (string) $body;
        
        $this->mail->addReplyTo($replayEmail,$replayName);
        $this->mail->addAddress($addressEmail,$addressName);
        
        try {
            $this->mail->send();
            
        } catch (Exception $ex) {
            echo "Erro ao enviar email: {$this->mail->ErrorInfo} {$ex->getMessage()}";
        }
                
    }

}
