<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='adefatowizz@gmail.com';
		$subject='Form Submission';
		$message="Wrote the following:"."\n\n" .$msg;
		$headers="From:".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$email.", We will contact you shortly!</h1>";
		}
		else{echo "Oops, Something went wrong!";


		}
	}
?>