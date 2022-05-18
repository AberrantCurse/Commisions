<?php
$message = $_POST['message'];

$email_from = 'technogamedevs@gmail.com';
$email_subject = 'New Commision!';
$email_body = $message;
$to = "technogamedevs@gmail.com";
$headers = "From: $email_from /r /n";
mail($to,$email_subject,$email_body,$headers);
echo "eggg"
?>

