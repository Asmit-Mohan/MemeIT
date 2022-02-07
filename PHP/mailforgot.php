<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer(true);
$emailid= "educatorsindia2022@gmail.com";
$pass="";

	
	$otp=mt_rand(10000,99999);
	$_SESSION["otp"]=$otp;
	
try
{
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailid;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom($emailid, 'Meme Creators');
    $mail->addAddress($mailidd,'USER');     //Add a recipient
    $mail->addReplyTo($emailid);

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'YOUR OTP';
    $mail->Body    = "<h2>Your OTP is $otp Never Share This OTP With Anyone</h2>";
    $mail->AltBody = "";

    $mail->send();
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
