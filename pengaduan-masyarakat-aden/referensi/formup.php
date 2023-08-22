<?php

$Id = $_GET['Id'];

$db = new PDO('mysql:host=localhost;dbname=datasiswa','root','');
$query = $db->query("SELECT * FROM `tbdatasiswa` WHERE  `Id`='$Id'");

$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div style="padding:100px;text-align:center;">
    <form action="update.php" method="POST">
    <div class="container mt-2">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
        <form class="card-body cardbody-color p-lg-4 text-white ">
        <br>
        <h2>Data Siswa</h2>
        <input type="hidden" name="Id" value="<?= $Id ?>">
        <div class="mb-3">
            <label>nis :</label><br>
            <input type="text" name="nis" class="form-control" style="width:300px;margin:auto" value="<?= $data['nis'] ?>">
        </div>
        <div class="mb-3">
            <label>name :</label><br>
            <input type="text" name="name" class="form-control" style="width:300px;margin:auto" value="<?= $data['name'] ?>">
        </div>
        <div class="mb-3">
            <label>class :</label><br>
            <input type="text" name="class" class="form-control" style="width:300px;margin:auto" value="<?= $data['class'] ?>">
        </div>
        <br><input type="submit" value="update" style="width:300px;margin:auto" class="btn btn-success"><br>
        </form>
</body>
</html>