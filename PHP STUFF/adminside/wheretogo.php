<?php
if(isset($_GET['type']))
{
	$x = $_GET['type'];
    header( 'Location: .'.$x);
}else {
	header( 'Location: admin.php');
}
?>