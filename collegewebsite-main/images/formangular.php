<?php$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message']

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = "User Name:$name.\n".
               "User Email:$email.\n".
               "Subject:$subject.".
               "User Message:$Message.\n";

 $to = 'suhas123.p@gmail.com';              
 $headers = "From: $email_from\r\n";
 $headers = "reply-to: $visitors_email\r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: index.html");

 ?>

