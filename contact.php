<?php
$email = $_POST['email'];
$to = "info@aibox-enclosures.com";
$subject = "Mail From Aibox";
$txt ="Email = " .$email;
$headers = "From: ";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
}
header("LOCATION: http://web.cu-eflyer.tk/ibox/");
?>