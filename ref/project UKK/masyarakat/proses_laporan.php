<?php
session_start();
include("../koneksi.php");
// $id_pengaduan            = rand(1,2);
$tgl_pengaduan =$_POST['tgl_pengaduan'];
$nik           = $_SESSION ["nik"];
$isi_laporan   =$_POST['isi_laporan'];
$foto_name          =$_FILES['foto']['name'];
$foto_temp          =$_FILES['foto']['tmp_name'];
$folder = "../img_laporan/" . $foto_name;
$status        ='0';

$cek = $db->query("select * from pengaduan where foto ='$foto_temp'");
if($cek){
    $query = $db->query("insert into pengaduan VALUES('','$tgl_pengaduan','$nik','$isi_laporan','$foto_name','$status')");
    move_uploaded_file($foto_temp,$folder);
    header("Location:data.php");
}else{
    header("Location:isi_laporan.php");
}
?>
    // var_dump($cek);

    //     if(isset($foto_name["foto"])){
    //     }else{
    //         header("Location:data.php");
    //     }
    // }else{
    //     header("Location:isi_laporan.php");
