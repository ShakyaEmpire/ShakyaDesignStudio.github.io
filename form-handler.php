<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@shakyadesign.online';

$email_subject = 'New form submission';

$email_body = "User Name: $name\n".
"User Email: $visitor_email\n".
"User Message: $message\n";

$to = 'shakya.empire@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>