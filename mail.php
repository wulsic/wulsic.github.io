<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$sender="From: $name \n Message: $message";
		$receiver = "wulsic@gmail.com";
		$mailheader = "From: $email \r\n";
		mail($receiver, $subject, $sender, $mailheader) or die("Error!");
		echo "Thank You for contacting me!";
	?>