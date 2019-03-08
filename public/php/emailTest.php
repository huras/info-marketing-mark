<?php
$to = 'hursat@gmail.com';
$message = 'This is the message.';
$subject = 'Insert Subject Here';
$headers = 'From: noreply@example.com' . "\r\n" .
           'Reply-To: me@example.com';

@mail($to, $subject, $message, $headers); 
?>