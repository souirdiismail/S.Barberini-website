<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="StefanoBarberiniDb";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);


if(isset($_POST['submit'])) {
    $email = $_POST["email"];
    $fullname = $_POST["name"];
    $mail_subject = $_POST["subject"];
    $content = $_POST["message"];
    $conn = $GLOBALS["conn"];
    $query="INSERT INTO `coach`(`email`, `fullname`, `mail_subject`, `content`, `datemail`, `confirmed`) VALUES ('$email','$fullname','$mail_subject','$content','".date('y-m-d')."',0)";    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
        $conn->close();
        header( 'Location: DIVENTA PERSONAL COACH');
    } else {
        echo "Error: " . $query . "<br/>" . $conn->error;
        echo "PLease Contact Eysionic@contact.com";
    }
    // $conn->query($query);
    
}else
{
    echo 'Post not sent';
    header( 'Location: DIVENTA PERSONAL COACH');
}