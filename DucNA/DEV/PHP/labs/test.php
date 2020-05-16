<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
require '/usr/share/php/libphp-phpmailer/class.pop3.php';
require '/usr/share/php/libphp-phpmailer/class.phpmaileroauth.php';
require '/usr/share/php/libphp-phpmailer/class.phpmaileroauthgoogle.php';

$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('ducna241099@gmail.com');
$mail->addCC('chopperkid999@gmail.com');
$mail->addBCC('nguyenanhduchihi@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'ducna241099@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'anhduc123';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>