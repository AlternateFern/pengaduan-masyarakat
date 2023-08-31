<?php
require "proses/koneksi.php";
session_start();
if (!isset($_SESSION["username"])) {
  $_SESSION['password'] == $_SESSION['password'];
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/index.css">
</head>
<!-- isi_pengaduan.php -->

<body>
  <?php $activepage = "isi_pengaduan";
  require 'navbar.php'; ?>
  <div class="container">
    <div class="mb-3">
      <form action="proses/proses_tambah.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label">Bukti berbentuk File Gambar atau Video</label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="foto">
        </div>
        <button type="submit" class="btn btn-dark">Kirim</button>
      </form>
    </div>
</body>

</html>