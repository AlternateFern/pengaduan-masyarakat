<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");



//var_dump($data);

//if($koneksi){
//  echo "koneksi berhasil";

//}else{
//  echo "gagal koneksi";
//}

$query = $koneksi->query ("select * from pengaduan");
$data  = $query->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <link rel="stylesheet" href= "BS/css/bootstrap.min.css">
</head>
<style>
  .home{
    color: black;
    text-decoration: none;
  }
</style>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan Pengaduan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" 
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>

    <a class="home" href="menu.php">Back</a><br>
    <a class="home" href="isi_pengaduan.php">Buat Pengaduan</a>
  </div>
</nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Tanggal Laporan</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){?>
    <tr>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><img src="img/<?= $pengaduan['foto']?>" style="width:auto;height:200px;"> </td>
      <td><a href="proses_hapus.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a></td>
    </tr>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>