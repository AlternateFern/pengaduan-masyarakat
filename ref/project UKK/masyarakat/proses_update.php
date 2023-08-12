<?php 
include('../koneksi.php');
$id_pengaduan  = $_GET["id_pengaduan"];
$isi_laporan   =$_POST['isi_laporan'];
$foto_name     =$_FILES['foto']['name'];
$foto_temp          =$_FILES['foto']['tmp_name'];
$query = "UPDATE `pengaduan` SET isi_laporan='$isi_laporan' where id_pengaduan='$id_pengaduan' ";

if($foto_name !== ""){
    
    $query = "SELECT * FROM `pengaduan` WHERE id_pengaduan='$id_pengaduan'";
    $query = $db->query($query);
    $data = $query->fetch();
    if($query){
    unlink("../img_laporan/". $data['foto']);
    }

    $query = "UPDATE `pengaduan` SET isi_laporan='$isi_laporan',foto='$foto_name' where id_pengaduan='$id_pengaduan' ";
    move_uploaded_file($foto_temp, '../img_laporan/'. $foto_name);
}


$query = $db->query($query);
if($query){
header("Location:data.php");
}
?>