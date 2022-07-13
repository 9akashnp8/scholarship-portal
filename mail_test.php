<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'akhila.k@lakshyaca.com';                 
    $mail->Password   = 'Akhilakshya@123';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    //$mail->setFrom('akhila.k@lakshyaca.com', 'Name');           
    //$mail->addAddress('akhila.k@lakshyaca.com');
    $mail->addAddress($email, $name);
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'IIC Lakshya Scholarship';
    $mail->Body    = file_get_contents('email_template.php');
    //$mail->AltBody = file_get_contents('email_template.php');
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  
?>