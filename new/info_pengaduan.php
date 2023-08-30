<?php
session_start();
require "proses/koneksi.php";

$query = $koneksi->query("SELECT * FROM pengaduan");
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

<body>
    <?php
    $activepage = "";
    require 'navbar.php'; ?>
    <div class="container">
        <?php foreach ($data as $pengaduan) { ?>
            <div class="mb-3">
                <form action="proses/proses_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" disabled><?= $pengaduan['isi_laporan'] ?></textarea>
                    </div>
                    <label for="exampleFormControlTextarea1" class="form-label">Bukti File</label>
                    <div class="input-group mb-3">
                        <img src="img/<?= $pengaduan['foto'] ?>" style="width:auto;height:200px; margin-bottom:20px;">
                    </div>
                    <a href="update_pengaduan.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-right: 3px; margin-top:">Edit</a>
                    <a href="proses/proses_hapus.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" class="btn btn-sm btn-danger ml-auto" style="padding: 4px 13px;" onclick="return confirm('Konfirmasi Penghapusan Data?')">Hapus</a>
                </form>
            <?php } ?>
            </div>
</body>

</html>