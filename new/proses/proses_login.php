<?php
   session_start();
   require "koneksi.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
    $data = $query->fetch();
    if($data!=(false))
    {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["nik"] = $data["nik"];
        header("Location:../index.php") ;
    }
    // if($dataArray){
    //     $_SESSION['username'] = $username;
    //     $_SESSION['password'] = $password;
    //     header("tampilan.php");
    // }
    else{
        header("Location:../login.php");
        echo "<script>alert('Maaf Data Yang Anda Masukan Salah. Silahkan Coba Lagi!')</script>";
    }
    ?>