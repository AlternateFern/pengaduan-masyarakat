<?php
   session_start();
   require "koneksi.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
    $data = $query->fetch();
    if($data > 0)
    {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["nik"] = $data["nik"];
        header("Location:../index.php") ;
    }

    else{
        header("Location:../login.php");
        $_SESSION['error'] = 'Username atau Password Salah!';
    }
    ?>