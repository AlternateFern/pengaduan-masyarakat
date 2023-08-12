<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        $_SESSION['password'] == $_SESSION['password'];
        header("Location:login.php"); 
    }
?>