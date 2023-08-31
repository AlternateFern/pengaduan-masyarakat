<?php
session_start();
require "proses/koneksi.php";
if (!isset($_SESSION["username"])) {
  $_SESSION['password'] == $_SESSION['password'];
  header("Location:admin_login.php");

  $query = $koneksi->query("SELECT `level` FROM petugas where level=$username");
  $data  = $query->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php $activepage = "profile";
    require 'admin_navbar.php'; ?>
    <div class="container" style="margin:auto; margin-top: 70px;">
    <p> Username : <?php echo $_SESSION['username'];?></p>
    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
    </div>
</body>

</html>