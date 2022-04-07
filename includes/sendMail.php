<?php
    
require "Exception.php";
require "SMTP.php";
require "PHPMailer.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



    $mail = new PHPMailer();

    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail -> Username = "ishingirobakery@gmail.com";
    $mail -> Password = "rzuigkosfjxapvel";                          
    $mail->SMTPSecure = "tls";            
    $mail->Port       = "587";          


    $toEmail = $_SESSION['toEmail'];



    
    $mail->setFrom('ishingirobakery@gmail.com', 'Ishingiro Bakery');
    $mail->addAddress($toEmail);    
    $mail->addReplyTo('ishingirobakery@gmail.com', 'Ishingiro Bakery');

    $mail -> isHTML(true);
    $username = $_SESSION['username'];
    $eunice = $_SESSION['link'];
    $linkAll = "http://localhost/ishingiro/reset_password.php?link=$eunice";

    $linkHelp = "http://localhost/ishingiro/support_page.php";
    




    $mail->Subject = 'Reset your password';
    $mail->Body    = "Hello <b>$username<b>  <br><br><br> Click on the link below to reset your password <br><br><br> <b>$linkAll</b> <br><br><br> If you run into problems, please contact support by visiting $linkHelp. <br><br><br> Please do not reply to this email with your password. We will never ask for your password, and we strongly discourage you from sharing it with anyone even your girlfriend😋. ";

    if($mail->send()){
        $errors = "Check your email to proceed.";
    }else{
        $errors = "Check your internet connection.";
    }



   
 

?>