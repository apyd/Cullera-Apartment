<?php
$to      = 'arturpydych@gmail.com';
$name	 = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Cullera - kontakt - ' . $name ;
$message = $_POST['message'] . "\r\n";
$headers = 'Od: ' . $name . "\r\n" ;
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-2'."\r\n";	

mail($to, $subject, $message , $headers);
?>