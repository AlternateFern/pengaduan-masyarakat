<?php

 include 'koneksi.php';   

//if($koneksi){
  //echo "koneksi berhasil";
 
 //}0else{
 // echo "gagal koneksi";
 //}

$isi = $_POST['isi_laporan'];
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('','$tanggal','1','$isi','$nama_foto','0')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proses Selesai</title>
</head>
<body>
    <a href="isi_pengaduan.php">Kembali</a>
</body>
</html>