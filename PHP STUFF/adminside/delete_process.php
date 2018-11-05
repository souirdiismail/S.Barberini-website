<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
$conn = new mysqli($servername, $username, $password,$dbname);

if(isset($_POST['submit'])) {
	$who =$_POST['ID'];
	$fromwhere = $_POST["mnin"];
	$sql = "DELETE FROM `stefanobarberinidb`.`".$_POST['table']."` WHERE `id`='".$_POST['ID']."';";
	$result = $conn->query($sql);
	if ($conn->query($sql) === TRUE) {
		//echo "ID N° =".$who." Deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error."<br>";
	}

	$conn->close();
	//echo $fromwhere;
	header( 'Location: '.$fromwhere);
}else
{
	echo 'Post not sent';
}

