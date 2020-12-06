<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$to='dilipsarvaiya700@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Subject :".$subject."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			die( 'Unable to load the "PHP Email Form" Library!');
		}
	}
?>