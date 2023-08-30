<?php
require "proses/koneksi.php";
$id = $_GET['id_pengaduan'];
$query = $koneksi->query("SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = $query->fetchAll();

session_start();
if (!isset($_SESSION["username"])) {
    $_SESSION['password'] == $_SESSION['password'];
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container" style="margin-top:20px;">
        <?php foreach ($data as $pengaduan) { ?>
            <form action="proses/proses_update.php?id_pengaduan=<?= $pengaduan['id_pengaduan']; ?>" method="POST">
                <div class="mb-3">
                    <p>
                        Nik : <?php echo $_SESSION["nik"] ?> <br>
                        Username : <?php echo $_SESSION["username"] ?>
                    </p>
                    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"><?php echo $pengaduan['isi_laporan']; ?></textarea>
                <?php } ?>
                <button type="submit" class="btn btn-sm btn-success ml-auto" style="padding: 4px 20px; margin-top: 20px;">Update</button>
                </div>
    </div>
</body>

</html>