<?php
require "proses/koneksi.php";
$id = $_GET['id_pengaduan'];
$query = $koneksi->query("SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container">
        <?php foreach ($data as $pengaduan) { ?>
            <form action="proses/proses_update.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"><?php echo $pengaduan['isi_laporan']; ?></textarea>
                    <?php } ?>
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
    </div>
</body>

</html>