<?php
$to_email = 'fatma2karam@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: fatma2karam@gmail.com';
mail($to_email,$subject,$message,$headers);
?>
