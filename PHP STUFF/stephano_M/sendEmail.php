<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['message'];
		$to='contact@stefanobarberini-club24hl.com'; // Receiver Email ID, Replace with your email ID
		
		$message="You have received an e-mail from ".$name."\n\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<script> alert('Sent Successfully! Thank you"." ".$name.", We will contact you shortly!')</script>";
            header("Location: index");
    $conn = $GLOBALS["conn"];
    $query="INSERT INTO `stefanobarberinidb`.`emails`(`email`,`fullname`,`mail_subject`,`content`,`datemail`)VALUES('$email','$name','$subject',$msg,'".date('y-m-d')."')";    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
        $conn->close();
        header( 'Location: index');
    } else {
        echo "Error: " . $query . "<br/>" . $conn->error;
        echo " \n PLease Contact Eysionic@contact.com";
    }
    // $conn->query($query);
		}
		else{
			echo "<script>alert('Something went wrong!')</script>";
		}
	}
?>