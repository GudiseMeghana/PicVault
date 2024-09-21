<?php
    session_start();
    $_SESSION["EVENT_NAME"]=$_POST['eventname'];
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login_page.php");
        exit;
    }
    else{
        header("location: date.php");
        exit;
    }
?>