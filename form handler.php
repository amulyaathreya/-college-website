<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@abcd.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
              "user email: "$visitor_email.\n".
              "subject: $subject.\n".
              "user message: $visitor_email.\n";
              
$to = 'amulyaathreya11@gmail.com';

$headers = "From: $email_form \r\n";

$headers .="reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>