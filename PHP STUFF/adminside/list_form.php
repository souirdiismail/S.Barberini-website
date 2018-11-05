<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);


function show_list($tablename){
	if (isset($_GET['type'])) {
		$who = $_GET['type'];
	}
	
	$conn = $GLOBALS['conn'];
	$sql = "select * from ".$tablename;
	$result = $conn->query($sql);
	echo'<h4 class="card-title"><strong>'.strtoupper($tablename).' Table</strong></h4>';
	echo '<diV class="table-responsive"><table class="table table-hover "><thead class="mdb-color darken-3"><tr class="text-white">';
	for ($i=0; $i < $conn->field_count; $i++) {
		$meta = mysqli_fetch_field_direct($result,$i);
		echo '<th>' . strtoupper($meta->name) .'</th>';
	}

	echo '</tr></thead><tbody>';
	while ($row = mysqli_fetch_row($result)) {
		echo '<tr><th scope="row">'.$row[0];
		for ($i=1; $i < $conn->field_count; $i++) { 
			if ($tablename =="coach" && $i == $conn->field_count-1) {
				if ($row[$i] == "0") {
							echo '<td style="padding-top: 5px;">
					<form onsubmit="return confirm(\'Do you really want to Confirm that Coach?\');" action="confirm_process.php" method="POST">
					<input type="hidden" name="ID" value="'.$row[0].'">
					<input type="hidden" name="table" value="'.$tablename.'">
					<input type="hidden" name="mnin" value="'.$_SERVER['REQUEST_URI'].'">
					<button class="btn btn-sm btn-outline-warning" type="submit" name="submit" value="submit"><strong>Confirm</i></strong></button></form>
					</td>';
				}else
				{
					echo '<td>Confirmed</td>';
				}
			}
			else{
				echo '<td>'.$row[$i].'</td>';	
			}
		}
		echo '</tr>';
	}
	echo '</tbody></table></div>';
}

function show_Fill_form($tablename){
	if(isset($_GET['type']))
	{
		$type = $_GET['type'];
		$conn = $GLOBALS['conn'];
		$sql = "select * from ".$tablename;
		$result = $conn->query($sql);
		echo '<form action="add_process.php" method="POST"><input name="type" type="hidden" id="who" value="'.$tablename.'">';
		for ($i=1; $i < $conn->field_count-1; $i++) {
			if ($i!=2) {
					echo'<label for="'.mysqli_fetch_field_direct($result,$i)->name.'" class="grey-text">'.strtoupper(mysqli_fetch_field_direct($result,$i)->name).'</label>
					<input required="true" type="text" name="'.mysqli_fetch_field_direct($result,$i)->name.'" class="form-control"><br>';
			}
		}
		echo'<div class="text-center mt-4"><button class="btn btn-outline-success" type="submit" name="submit" value="submit"><strong>Add</strong></button></div></form>'
		;
	}else {
		header( 'Location: admin.php');
	}
}

function show_Delete_form($tablename){
	if (isset($_GET['type'])) {
		$who = $_GET['type'];
	}
	
	$conn = $GLOBALS['conn'];
	$sql = "select * from ".$tablename;
	$result = $conn->query($sql);
	echo '<diV class="table-responsive"><table class="table table-hover "><thead class="mdb-color darken-3"><tr class="text-white"><th class="pr-md-3 pr-5">Delete
	</th>';
	
	for ($i=0; $i < $conn->field_count; $i++) {
		$meta = mysqli_fetch_field_direct($result,$i);
		echo '<th>' . strtoupper($meta->name) .'</th>';
	}
	echo '</tr></thead><tbody>';
	
	while ($row = mysqli_fetch_row($result)) {
		echo '<tr><th scope="row" class="pr-md-3 pr-5">
		<form onsubmit="return confirm(\'Do you really want to DELETE that account?\');" action="delete_process.php" method="POST">
		<input type="hidden" name="ID" value="'.$row[0].'">
		<input type="hidden" name="table" value="'.$tablename.'">
		<input type="hidden" name="mnin" value="'.$_SERVER['REQUEST_URI'].'">
		<button class="btn btn-sm btn-outline-danger" type="submit" name="submit" value="submit"><strong><i class="far fa-trash-alt"></i></strong></button></form>
		</th>';/*.$row[0];*/
		for ($i=0; $i < $conn->field_count; $i++) { 
			echo '<td>'.$row[$i].'</td>';
		}
		echo '</tr>';
	}
	echo '</tbody></table></div>';
}

function show_Edit_form($tablename){
	if (isset($_GET['type'])) {
		$who = $_GET['type'];
	}
	
	$conn = $GLOBALS['conn'];
	$sql = "select * from ".$tablename." where type = '".$who."'" ;
	$result = $conn->query($sql);
	//echo'<h4 class="card-title"><strong>'.strtoupper($who).' Table</strong></h4>';
	echo '<diV class="table-responsive"><table class="table table-hover "><thead class="mdb-color darken-3"><tr class="text-white"><th class="pr-md-3 pr-5">Edit
	</th>';
	
	for ($i=0; $i < $conn->field_count; $i++) {
		$meta = mysqli_fetch_field_direct($result,$i);
		echo '<th>' . strtoupper($meta->name) .'</th>';
	}
	echo '</tr></thead><tbody>';
	
	while ($row = mysqli_fetch_row($result)) {
		echo '<tr><th scope="row" class="pr-md-3 pr-5">
		<form action="edit_process.php" method="POST">
		<input type="hidden" name="ID" value="'.$row[0].'">
		<input type="hidden" name="mnin" value="'.$_SERVER['REQUEST_URI'].'">
		<button class="btn btn-sm btn-outline-warning" type="submit" name="submit" value="submit"><strong><i class="fas fa-edit"></i></strong></button></form>

		</th>';/*.$row[0];*/
		for ($i=0; $i < $conn->field_count; $i++) { 
			echo '<td>'.$row[$i].'</td>';
		}
		echo '</tr>';
	}
	echo '</tbody></table></div>';
}
?>