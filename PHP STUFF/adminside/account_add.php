<?php
session_start();
if(strcmp($_SESSION["type"],'Admin')!=0){
    header( 'Location: ./index.php');
}
if(!isset($_GET['type'])){
 header( 'Location: ./wheretogo.php');
}
?>
<?php require 'Header.php'; ?>
<?php require 'list_form.php'; ?>
<!--Main layout-->
<main>
    <div id="" class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s">
                <h4 class="card-title">
                    <strong>Add a  <?php 
                    if(isset($_GET['type'])) {
                        echo $_GET['type'];
                    } ?> </strong>
                </h4>
                <?php show_Fill_form($_GET['type']) ?>
            </div>
        </div>
    </div>
</main>
<?php require 'Footer.php'; ?>