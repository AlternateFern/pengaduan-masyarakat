<?php
require "koneksi.php";

$isi = $_POST['isi_laporan'];
$id = $_GET['id_pengaduan'];

$query = $koneksi->query("UPDATE `pengaduan` SET isi_laporan='$isi' WHERE id_pengaduan='$id'");

header("location:../info_pengaduan.php");