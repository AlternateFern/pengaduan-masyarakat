<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query ("select * from pengaduan");
$data  = $query->fetchAll();

?>