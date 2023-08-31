<?php
require "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$query = $koneksi->query("INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')");

header("Location:../login.php");
?>
