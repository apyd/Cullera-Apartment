<?php
$to      = 'arturpydych@gmail.com';
$name	 = $_POST['name'];
$email   = $_POST['email'];
$from    = $email;
$subject = 'Cullera - kontakt - ' . $name ;
$content = nl2br($_POST['content']);
$message = '<b>Imię i nazwisko:   </b>' .$name. '<br><b>Od:  </b> '.$email. ' <br> <b>Treść wiadomości:  </b>' . '<br> <p>' .$content . '</p>';

$headers = 'Od: ' . $from . "\r\n" ;
$headers .= 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";	

mail($to, $subject, $message, $headers);
?>