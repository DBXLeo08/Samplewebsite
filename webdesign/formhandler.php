<?php
$name= $_POST['name'];
$visitor_Email=$_POST['email'];
$visitor_Subject=$_POST['subject'];
$message=$_POST['message'];


$email_from ="dikshantbhatt98@gmail.com";
$email_subject="New Submission";
$email_body= "user_name : $name.\n".
			"user_email: $visitor_Email.\n".
			"subject:$visitor_Subject.\n".
			"user_message:$message.\n";
$to="dikshantbhatt99@gmail.com";
$headers="from: $email_from \r\n";
$headers.= "reply-to:$visitor_Email\r\n";
mail($to, $email_subject, $headers);

header("Location:contact.html");

?>