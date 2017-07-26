<?php
$to      = 'mikail94@gmail.com';
$name	 = $_POST['name'];
$email   = $_POST['email'];
$tel   = $_POST['tel'];
$number   = $_POST['number'];
$date_arrive   = $_POST['date-arrive'];
$date_go   = $_POST['date-go'];
$from    = $email;
$subject = 'Cullera - kontakt - ' . $name ;
$content = nl2br($_POST['content']);
$message = '<b>Imię i nazwisko:   </b>' .$name. '<br>
            <b>Od:  </b> '.$email. ' <br>
            <b>Numer telefonu:  </b> '.$tel. ' <br>
            <b>Liczba gości:  </b> '.$number. ' <br>
            <b>Data przyjazdu:  </b> '.$date_arrive. ' <br>
            <b>Data odjazdu:  </b> '.$date_go. ' <br>
            <b>Uwagi:  </b>' . '<br>
            <p>' .$content . '</p>';

$headers = 'Od: ' . $from . "\r\n" ;
$headers .= 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

mail($to, $subject, $message, $headers);
?>
