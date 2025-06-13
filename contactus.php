<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];
$to = "info@aibox-enclosures.com";
$subject = "Mail From Aibox";
$txt ="Name = ". $name . "\r\n Email = " . $email .  "\r\n Subject = " . $sub . "\r\n Message =" . $message;
$headers = "From: ";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
}
header("LOCATION: http://web.cu-eflyer.tk/ibox/");
?>