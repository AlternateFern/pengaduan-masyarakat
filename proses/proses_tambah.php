<?php

include 'koneksi.php';

//if($koneksi){
//echo "koneksi berhasil";

//}0else{
// echo "gagal koneksi";
//}
session_start();
$nik = $_SESSION['nik'];
$isi = $_POST['isi_laporan'];
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('','$tanggal','$nik','$isi','$nama_foto','0')");

move_uploaded_file($asal_foto, "../img/$nama_foto");

header("Location:../index.php");