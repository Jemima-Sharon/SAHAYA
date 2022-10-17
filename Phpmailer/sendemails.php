<?php
$to_email = "shalinieagalapati02@gmail.com";
$subject = "New Year";
$message = "Please donate.";
$headers = "From: dathrutva@gmail.com";
if (mail($to_email, $subject, $message, $headers)) {
 echo "";
} else {
 echo "Email sending failed...";
}
?>