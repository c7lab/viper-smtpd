<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 18.07.18
 * Time: 17:21
 */

namespace Test;

use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . "/../vendor/autoload.php";

// Testuser is user@domain.de:secret1


$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "localhost";
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'user@domain.de';  // a valid email here
$mail->Password = 'secret1';  // the password from email
$mail->From = 'user@domain22.de';
$mail->SMTPDebug = true;
#$mail->AddReplyTo('from@xxx.com.br', 'Test');

#$mail->FromName = 'Test SMTP';
$mail->AddAddress('teste@leuffen.de', 'teste@leuffen.de');

$mail->Subject = 'Test SMTP';
$mail->IsHTML(true);
$mail->Body = '<b>Teste</b><br><h1>teste 2</h1>';
//$mail->Send();

$mail->Send();

