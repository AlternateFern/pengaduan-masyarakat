<?php


 include 'koneksi.php';   


$isi = $_POST['isi_laporan'];
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('','$tanggal','113','$isi','$nama_foto','0')");
move_uploaded_file($asal_foto, "img/$nama_foto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>terimakasih</title>
</head>
<body>
<div class="Terimakasih">
    <h1>Terimkasih</h1>
    <a href="home.php" class="btn btn-dark">Kembali</a>
</body>
</html>