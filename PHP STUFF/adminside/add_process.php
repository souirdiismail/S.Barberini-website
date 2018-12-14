<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
$conn = new mysqli($servername, $username, $password,$dbname);
ob_start(); 
if(isset($_POST['submit'])) {
	$who = $_POST['type'];
	$sql = "SELECT * from ".$who;
	$result = $conn->query($sql);
	$values = array();
	$values[4]=$who;
	for ($i=1; $i < $conn->field_count; $i++) {
		if($who !="newsletter"){
			if ($i!=2 && $i!=6) {
				$values[$i]=$_POST[mysqli_fetch_field_direct($result,$i)->name];
				echo '$values['.$i.']='.$_POST[mysqli_fetch_field_direct($result,$i)->name].'</br>';		
			}
		}
		else{
			if ($i!=4) {
				$values[$i]=$_POST[mysqli_fetch_field_direct($result,$i)->name];
				echo '$values['.$i.']='.$_POST[mysqli_fetch_field_direct($result,$i)->name].'</br>';		
				// echo mysqli_fetch_field_direct($result,$i)->name.'='.$_POST[mysqli_fetch_field_direct($result,$i)->name].'</br>';	
			}
		}
	}
	if($who != "newsletter")
	{
		$url = $values[5];
	}
	else
	{
		$url = $values[3];
	}
	
	if(preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches)){
		$thumbnail = "https://img.youtube.com/vi/".$matches[1]."/0.jpg";
		if($who != "newsletter")
		{
			$sql ="INSERT INTO `stefanobarberinidb`.`".$who."` (`title`, `thumbnail`, `description`, `content`, `url`, `datepost`) VALUES ('".$values[1]."','".$thumbnail."','".$values[3]."','".$values[4]."','".$values[5]."','".date('y-m-d')."');";
		}
		else
		{
			$sql ="INSERT INTO `simonarinieridb`.`".$who."` (`title`, `content`, `url`, `thumbnail`) VALUES ('".$values[1]."','".$values[2]."','".$values[3]."','".$thumbnail."');";
		}
	}


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
	header( 'Location: admin.php');
	}
else
{
	echo 'Post not sent';
}
?>