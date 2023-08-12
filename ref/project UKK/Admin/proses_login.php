<?php
   session_start();
   $db = new pdo("mysql:host=localhost;dbname=pelaporan_pengaduan_masyarakat;",'root','');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $db->query("select * from petugas where username='$username' AND password='$password'"); // jalankan query
    $data = $query->fetch(); // ubah ke bentuk array
    if($data!=(false))
    {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["id_petugas"] = $data["id_petugas"];
        header("Location:Tampilan.php") ;
    }
    // if($dataArray){
    //     $_SESSION['username'] = $username;
    //     $_SESSION['password'] = $password;
    //     header("tampilan.php");
    // }
    else{
        echo"<script>alert('Maaf Data Yang Anda Masukan Salah. Silahkan Cobla Lagi!!')</script>";
        header("Location:login.php");

    }
    ?>