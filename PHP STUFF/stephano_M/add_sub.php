<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="StefanoBarberiniDb";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);


if(isset($_POST['submit'])) {
    $email = $_POST["mailSub"];
    $conn = $GLOBALS["conn"];
    $query="INSERT INTO `subscribers`(`email`, `datesub`) VALUES ('$email','".date('y-m-d')."')";    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
        $conn->close();
        header( 'Location: index');
    } else {
        echo "Error: " . $query . "<br/>" . $conn->error;
        echo " \n PLease Contact Eysionic@contact.com";
    }
    // $conn->query($query);
    
}else
{
    echo 'Post not sent';
    header( 'Location: index');
}