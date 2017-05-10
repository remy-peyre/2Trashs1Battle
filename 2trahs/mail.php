<?php
// Le message
ini_set('SMTP','smtp.sfr.fr');
ini_set('smtp_port',25);
if(isset($_POST['input_company'])){
    if(!empty($_POST['form_company']))
     $subject = $_POST['subject'];
     $message =  $_POST['company'].'\r\n'.$_POST['activity'].'\r\n'.$_POST['adresse'].'\r\n'.
     $_POST['email'].'\r\n'.$_POST['message'] ;
     $headers = 'From: ' .$_POST['email'] . "\r\n" .
     'Reply-To: ' .$_POST['email'] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     
    if(mail('sahra.vadrot@supinternet.fr', $subject, $message, $headers)){
        echo "ok";
    }
    else{
        echo "no";
    }
}
?>