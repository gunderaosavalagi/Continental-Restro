<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["submit"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'continentalrestro@gmail.com';   //SMTP write your email
    $mail->Password   = 'zdvynuqkouprcdgx';      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('example@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->name = $_POST["name"];
    $mail->email = $_POST["email"];
    $mail->subject = $_POST["subject"];
    $mail->message = $_POST["message"]; //email message

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'homepage.php';
    </script>
    ";
}
?>