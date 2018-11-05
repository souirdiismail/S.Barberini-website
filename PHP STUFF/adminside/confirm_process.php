<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
$conn = new mysqli($servername, $username, $password,$dbname);
ob_start();

	if(isset($_POST['submit'])) {
		$fromwhere = $_POST["mnin"];
		$sql = "UPDATE `stefanobarberinidb`.`coach` SET `confirmed` = '1' WHERE (`id` = '".$_POST['ID']."');";
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		while (ob_get_status()) 
		{
		    ob_end_clean();
		}
	header( 'Location: '.$fromwhere);
	}
	else
	{
		echo "Post not sent";
	}
?>