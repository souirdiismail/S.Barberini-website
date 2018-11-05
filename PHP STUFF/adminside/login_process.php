<?php
session_start();
//connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
//get the value
$user =$_POST['user'];
$pass=$_POST['Password'];
// prevent mysql injection
$user=stripcslashes($user);
$pass=stripcslashes($pass);
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
try{
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }
    //echo "Connected successfully <br>";
    $sql = "select username_,password_,rights from users";
    $result = $conn->query($sql);
    if ($result->num_rows >= 0) {
        $success = false;
        // output data of each row
        while($row = $result->fetch_assoc()) {
        	if (strtolower($row["username_"])==strtolower($user))
            {
                if($row["password_"]==$pass) {
                    $_SESSION["User"] = $row["username_"];
                    $_SESSION["type"] = "Admin";
                    $success = true;
                    check($_SESSION["type"]);
                    break;
                }
            }
        }
        if ($success == false) {
                echo "failed to login verify your informations";
                echo "email : ".$user;
                echo "pass  : ".$pass;
                echo "</br><form action='/index.php'><input type='submit' value='Go back to Login' /></form>";    
        }
    }
}catch(exception $e)
{
    echo 'Caught exception: ',  $e->getMessage();
}

function check($x){
    //echo"check()";
    switch ($x)
    {
        case "Admin":
            //echo"admin";
            header( 'Location: ./admin.php');
            break;
    }
    //echo"check() end";
}
?>