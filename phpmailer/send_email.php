<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendEmail($email,$location,$subject,$message){
    //Load composer's autoloader
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer(true);             
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'storefindies123@gmail.com';     
        $mail->Password = 'sewksufjsmxemsbj';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('storefindies123@gmail.com');

        //Recipients
        $mail->addAddress('codera.jr.arnel.eccinfotech@gmail.com');              
        $mail->addReplyTo($email);

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message . "<br>". $location;

        $mail->send();

    return true;
    } catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
    return false;
    }
}
?>