<?php
$to = "sulbha2814@gmail.com";
$subject = "HTML email";

$message = "hello";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // for html

// More headers
$headers .= 'From: <sulbhashri@gmail.com>' . "\r\n";
//$headers .= 'Cc: fromcc@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
	echo "sent";
}else
{
	echo "fail";
}
?>