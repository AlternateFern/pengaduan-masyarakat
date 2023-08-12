<?php
    session_start();
    if (isset($_SESSION["username"])) {
        $_SESSION['password'] == $_SESSION['password'];
        header("Location:tampilan.php");

        // $_SESSION ['username'];
        // var_dump($_SESSION);
    }
?>