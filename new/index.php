<?php
require "proses/koneksi.php";
session_start();
if (!isset($_SESSION["username"])) {
  $_SESSION['password'] == $_SESSION['password'];
  header("Location:login.php");
}

$nik = $_SESSION["nik"];
// $query = $koneksi->query("SELECT * FROM pengaduan");
$query = $koneksi->query("SELECT * FROM pengaduan JOIN masyarakat ON masyarakat.nik = pengaduan.nik where masyarakat.nik=$nik");
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
  <h2 style="margin-top:10px; text-shadow: 0px 1px 1.8px black;"> List Laporan Pengaduan </h2>
  <table class="table" style="margin-top:20px;">
    <tbody>
      <?php foreach ($data as $pengaduan) { ?>
        <tr>
          <td><?= $pengaduan['id_pengaduan'] ?>
          <td><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
              width="25.000000pt" height="25.000000pt" viewBox="0 0 15.000000 38.000000"
              preserveAspectRatio="xMidYMid meet">

              <g transform="translate(0.000000,38.000000) scale(0.100000,-0.100000)"
              fill="#000000" stroke="none">
              <path d="M25 355 c-24 -23 -25 -28 -25 -173 0 -132 2 -151 18 -165 24 -22 55
              -21 75 1 14 15 17 40 17 129 0 116 -8 139 -47 131 -15 -3 -19 -15 -21 -66 -2
              -38 1 -62 8 -62 6 0 10 24 10 56 0 40 3 55 13 52 8 -3 12 -35 12 -113 0 -90
              -3 -110 -17 -118 -12 -8 -21 -7 -32 2 -13 11 -16 38 -16 157 0 136 1 144 22
              158 30 21 44 20 68 -4 18 -18 20 -33 20 -130 0 -67 4 -110 10 -110 6 0 10 45
              10 115 0 110 -1 117 -25 140 -13 14 -36 25 -50 25 -14 0 -37 -11 -50 -25z"/>
              </g>
              </svg>
          </td>
          <td><?= $pengaduan['nik'] ?> / <?php echo $_SESSION["username"] ?></td>
          <td><?= $pengaduan['tgl_pengaduan'] ?></td>
          <td>
            <!-- <a href="update_pengaduan.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px;">Edit</a>
            <a href="proses/proses_hapus.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-danger ml-auto" style="padding: 4px 13px;" onclick="return confirm('Konfirmasi Penghapusan Data?')">Hapus</a> -->
            <a href="info_pengaduan.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px;">Buka</a>
          </td>
        </tr>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</html>

<!-- tampil hapus tambah login -->