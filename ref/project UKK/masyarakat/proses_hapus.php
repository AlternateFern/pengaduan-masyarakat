<?php
include('../koneksi.php');
$id_pengaduan = $_GET['id_pengaduan'];

$query = $db->query("DELETE FROM `pengaduan` WHERE id_pengaduan='$id_pengaduan'");

if($query){
    header("location:data.php");
}