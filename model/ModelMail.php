<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class ModelMail {
    public function SendEmail(){


        //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  /* SMTP::DEBUG_SERVER;   */    //toggle for troubleshooting      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fr.michaud93@gmail.com';                     //SMTP username
    $mail->Password   = 'wnwgwkifseswbiqk';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients

    $mail->addAddress($_POST['username']); 
  

    
    //Content
    $mail->isHTML(true);                                
    $mail->Subject = 'Bienvenue';
    $mail->Body    = 'Bonjour, ' . $_POST['nom'] . ' et merci de nous faire confiance!';
     
    $mail->send();
   /*  echo 'Message has been sent'; Toggle in troubleshooting mode*/ 

    }
}