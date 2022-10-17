<?php
$to_email = "shalinieagalapati02@gmail.com";
$subject = "Thankyou";
$message = "Dear one, thankyou for your peak generosity levels.
We have received your fund. :)";
$headers = "From: dathrutva@gmail.com";
if (mail($to_email, $subject, $message, $headers)) {
 echo "";
} else {
 echo "Email sending failed...";
}
?>