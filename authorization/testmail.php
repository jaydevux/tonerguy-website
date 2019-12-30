<?php

require('phpmailer.php');
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(true); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "jaybuxd@gmail.com";
$mail->Password = "Dr@gonfly311";
$mail->SetFrom("jaybuxd@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("virtuarchitects7@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

 ?>
