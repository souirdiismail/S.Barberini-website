<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stephano";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);

    function get_videos(){
        $conn = $GLOBALS["conn"];
        $sql = "select * from videos";
        $results = $conn -> query($sql);
        
        while ($row = mysqli_fetch_row($results)) {
            echo '<div class="col-md-4 col-sm-6 ">';
            echo '<div class="card first_blog_row_card animated  fadeInDown ">';
            echo '<img class="card-img-top img-fluid" src="'.$row[2].'" alt="Card image cap">';
            echo '<div class="card-body"><p class="card-text">';
            echo  $row[3];
            echo '</p></div></div></div>';
        }
    }
?>