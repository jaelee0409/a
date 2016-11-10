<!DOCTYPE HTML>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Sendemail Script</title>

</head>

<body>

	<!-- Reminder: Add the link for the 'next page' (at the bottom) -->
	<!-- Reminder: Change 'YourEmail' to Your real email -->

	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(!$email == "" && (!strstr($email,"@") || !strstr($email,".")))
	{
	echo "<h2>Use Back - Enter valid e-mail</h2>\n";
	$badinput = "<h2>Feedback was NOT submitted</h2>\n";
	echo $badinput;
	die ("Go back! ! ");
}

if(empty($name) || empty($email) || empty($message)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$subject = $name;

$message = stripcslashes($message);

$message = " $todayis [EST] \n
Message: $message \n
From: $name ($email)\n
";

$from = "From: $email\r\n";


mail("jaelee0409@gmail.com", $subject, $message, $from);

?>

<p align="center">
	Date: <?php echo $todayis ?>
	<br />
	Thank You : <?php echo $name ?> ( <?php echo $email ?> )
	<br />

	<br />
	Message:<br />
	<?php $messageout = str_replace("\r", "<br/>", $message);
	echo $messageout; ?>
	<br />

	<br /><br />
	<a href="https://jaelee0409.github.io/a"> Next Page </a>
</p> 

</body>

</html>