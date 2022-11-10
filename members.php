<?php session_start(); ?>
<?php include("config.php"); ?>
<?php include("includes/header.php"); ?>


<?php include("includes/footer.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php

if (isset($_GET['action'])) {
    $do = $_GET['action'];

}else{
    $do="index";
}


?>
