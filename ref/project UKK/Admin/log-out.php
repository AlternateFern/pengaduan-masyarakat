<?php

session_start();

session_destroy();

header("Location:login.php");
// $_SESSION['username'];
// var_dump($_SESSION);