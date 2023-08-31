<?php
session_start();
require "proses/koneksi.php";

$nik = $_SESSION["nik"];
$query = $koneksi->query("SELECT * FROM pengaduan JOIN masyarakat ON masyarakat.nik = pengaduan.nik where masyarakat.nik=$nik");
$data  = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pengaduan | Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<!-- info_pengaduan.php -->

<body>
    <?php
    $activepage = "";
    require 'admin_navbar.php'; ?>
    <div class="detaillaporan">
    <?php foreach ($data as $pengaduan) { ?>
                    <h2>Pembuat Laporan : <br><?= $pengaduan['nama'] ?></h2>
                    <p style="font-weight:bold;">Tanggal Laporan : <br><?= $pengaduan['tgl_pengaduan']?></p>
                    <h4>Bukti :</h4>
                    <img src="img/<?= $pengaduan['foto'] ?>" style="width:auto;height:200px; margin-top:-20px;">
                    <a href="update_pengaduan.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px; margin-top:">Edit</a>
                    <a href="proses/proses_hapus.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-danger ml-auto" style="padding: 4px 13px; margin-left: 15px;" onclick="return confirm('Konfirmasi Penghapusan Data?')">Hapus</a>
                </div>
    <div class="container">
            <div class="mb-3 mt-3">
                <form action="proses/proses_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="isi_laporan" disabled><?= $pengaduan['isi_laporan'] ?></textarea>
                        <h2 class="mt-3" style="margin:0;">Status : <?= $pengaduan['status']?></h2>

                    </div>
                    <div class="mt-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggapan Admin</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="isi_laporan" disabled>Tanggapan Admin</textarea>
                    </div>
                    <a href="index.php" class="btn btn-sm btn-outline-primary" style="padding: 4px 20px; margin: 40px 3px 0px 0px;">Kembali</a>
                </form>
            <?php } ?>
            </div>

</body>

</html>