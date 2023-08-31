<?php
   session_start();
   require "koneksi.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $koneksi->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
    $data = $query->fetch();
    if($data > 0)
    {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["id_petugas"] = $data["id_petugas"];
        header("Location:../admin_index.php") ;
    }

    else{
        header("Location:../admin_login.php");
        $_SESSION['error'] = 'Username atau Password Salah!';
    }
    ?>