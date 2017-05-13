<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 4;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = gethostbyname('tls://smtp.gmail.com');

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sahravadrotpro@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "predator77";
//Set who the message is to be sent from
$to = $_POST['destination'];
$mail->setFrom('sahravadrotpro@gmail.com', '2 Trash 1 Battle ');
//Set an alternative reply-to address
$mail->addReplyTo('sahravadrotpro@gmail.com', '2 Trash 1 Battle ');
//Set who the message is to be sent to
$mail->addAddress('sahra.vadrot@supinternet.fr', 'John Doe');
//Set the subject line
$mail->Subject = 'Bienvenu dans la team Trasher !';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<h1 style='text-align:center;color:#86D4D9' width:100%;>Hello la team Trash Battle ! Merci d’avoir souscrit à notre newsletter !  &#128170;</h1><br> 
<br>
<h2 style='text-align:center;color:#86D4D9'>Et si on commençait tout de suite avec un vote pour la Battle de la semaine ?</h2><br>
<img src='https://img4.hostingpics.net/pics/230395mail.png' alt='trash battle' style='text-align:center;width:100%;margin-right:auto;margin-left:auto;'><br>
<h3 style='text-align:center;color:#86D4D9'>Et n’oubliez pas, votre vote compte double !</h3><br>
<a style ='text-decoration:none;font-weight:bolder;' href=\"https://facebook.com\"><p style='color:#86D4D9;font-size:18px'>Rendez-vous sur notre site pour plus de contenu ! </p></a>
<a style ='text-decoration:none;font-weight:bolder;' href=\"https://facebook.com\"><p style='color:#86D4D9;font-size:18px;'>Téléchargez notre application ! </p></a><br><hr><p>Cordialement</p><br>
<p>La team Trash Battle</p>");

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>