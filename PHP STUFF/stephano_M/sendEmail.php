<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['message'];

		$to='xyz.123@mail.com'; // Receiver Email ID, Replace with your email ID
		
		$message="You have received an e-mail from ".$name."\n\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<script> alert('Sent Successfully! Thank you"." ".$name.", We will contact you shortly!')</script>";
            header("Location: index");
		}
		else{
			echo "<script>alert('Something went wrong!')</script>";
		}
	}
?>