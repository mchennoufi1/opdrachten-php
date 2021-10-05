<?php
session_start();
include("includes/link.php");

    if($_SESSION['login'] == true){
        echo "Hallo";
    } else{
        header('Location: opdracht4.php');
    }

?>