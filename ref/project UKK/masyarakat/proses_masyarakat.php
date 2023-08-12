<?php
include("../koneksi.php");
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$query = $db->query("INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')");

header("Location:login_1.php");

?>