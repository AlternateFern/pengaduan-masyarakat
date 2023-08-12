<?php

session_start();

session_destroy();

header("Location:login_1.php");
// $_SESSION['username'];
// var_dump($_SESSION);