<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mskale025@gmail.com';

$email_subject = 'New Form Submission';
 
$email_body ="User Name: $name.\n".
              "User email: $visitor_email.\n".
              "ubject: $subject.\n".
              "User Message: $message .\n";

$to = 'mmkale7@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>