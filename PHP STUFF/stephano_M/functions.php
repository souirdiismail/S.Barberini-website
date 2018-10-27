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
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-center">'.$row[1].'</h5>';
            echo '<p class="card-text">';
            echo  $row[3];
            echo '</p></div>';
            echo '<button class="btn video_btn text-center"><a href="watch?id='.$row[0].'">More</a></button>';
            echo '</div></div>';
        }
    }
    function watch_videos($id)
    {
        $conn = $GLOBALS["conn"];
        $query = "select url from videos where id=$id";
        $results = mysqli_query($conn,$query);
        while ($row1 = mysqli_fetch_row($results)) {
            echo  $row1[0];
        }
        
    }
?>