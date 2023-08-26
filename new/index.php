<?php
require "proses/koneksi.php";
session_start();
    if (!isset($_SESSION["username"])) {
        $_SESSION['password'] == $_SESSION['password'];
        header("Location:login.php"); 
    }

$query = $koneksi->query("SELECT * FROM pengaduan");
$data  = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Pengaduan Masyarakat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <?php
  $activepage = "index";
  require 'navbar.php'; ?>
</body>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nik</th>
        <th scope="col">Isi Laporan</th>
        <th scope="col">Tanggal Laporan</th>
        <th scope="col">Gambar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $pengaduan) { ?>
        <tr>
          <td><?= $pengaduan['id_pengaduan'] ?>
          <td><?= $pengaduan['nik'] ?></td>
          <td><?= $pengaduan['isi_laporan'] ?></td>
          <td><?= $pengaduan['tgl_pengaduan'] ?></td>
          <td><img src="img/<?= $pengaduan['foto'] ?>" style="width:auto;height:200px;"> </td>
          <td>
            <a href="update_pengaduan.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px;">Edit</a>
            <a href="proses/proses_hapus.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-danger ml-auto" style="padding: 4px 13px;" onclick="return confirm('Konfirmasi Penghapusan Data?')">Hapus</a>
          </td>
        </tr>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</html>