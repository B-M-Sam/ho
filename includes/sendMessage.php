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


    $toEmail = $_SESSION['owner_email'];



    
    $mail->setFrom('ishingirobakery@gmail.com', 'Ishingiro Bakery');
    $mail->addAddress($toEmail);    
    $mail->addReplyTo('ishingirobakery@gmail.com', 'Ishingiro Bakery');

    $mail -> isHTML(true);
    $username = $_SESSION['owner_name'];
    

    $linkHelp = "http://localhost/ishingiro/support_page.php";
    

    $suspect_email = $_SESSION['suspect_email'];
    $suspect_name = $_SESSION['suspect_name'];


    $mail->Subject = 'Security Alert';
    $mail->Body    = "Hello <b>$username</b>  <br><br><br> A new sign-in of account of <b>$suspect_name</b> with the following email: <b>$suspect_email</b> at <b>$date</b> at <b>$time</b> <br><br><br><br> If thisuser isn't authorised to access the admin dashboard this hour you can check the activity by clicking this link www.igihe.com ";

    if($mail->send()){
        header("Location: home.php");
    }else{
        $errors = "Check your internet connection.";
    }



   
 

?>