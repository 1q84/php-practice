<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
	
	$toaddress = "su.haidong@hotmail.com";
	$subject = "Feedback from web site";
	$mailcontent = "Customer name:".$name."\n".
				   "Customer email:".$email."\n".
				   "Customer comments:\n".$feedback."\n";
	$fromaddress = "ericsu1988@gmail.com";
	mail($toaddress, $subject, $mailcontent,$fromaddress);
?>
<html>
<head>
<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback has been sent.</p>
</body>
</html>