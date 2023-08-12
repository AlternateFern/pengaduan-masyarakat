<?php
    include("koneksi.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $db->query("select * from petugas where username='$username' AND password='$password'"); // jalankan query
    $dataArray = $query->fetchAll(); // ubah ke bentuk array

    if($dataArray){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:./Admin/Tampilan.php");
    }
    else{
        header("Location:login.html");
    }
?>