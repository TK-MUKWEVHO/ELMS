<?php
session_start();

if(isset($_SESSION['persalNumber'])){
    unset($_SESSION['persalNumber']);
    session_destroy();
}
header("location: login.php");
die;
?>