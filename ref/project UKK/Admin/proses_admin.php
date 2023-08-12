<?php
include("../koneksi.php");

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
// $level = $_REQUEST['level'];
// $db = new pdo("mysql:host=localhost;dbname=pelaporan_pengaduan_masyarakat;",'root','');
$query = $db->query("INSERT INTO petugas VALUES('','$nama_petugas','$username','$password','$telp','admin')");

header("Location:../login.html");

?>