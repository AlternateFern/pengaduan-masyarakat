<?php
include('../koneksi.php');
$id_petugas =$_POST ['id_petugas'];
$nama_petugas =$_POST ['nama_petugas'];
$username =$_POST ['username'];
$password =$_POST ['password'];
$telp =$_POST ['telp'];

$query = $db->query("INSERT INTO petugas VALUES('$id_petugas','$nama_petugas','$username','$password','$telp','admin')");

header("Location:login.php");

?>