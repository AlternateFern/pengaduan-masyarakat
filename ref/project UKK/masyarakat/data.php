<?php
include('../koneksi.php');
include('session.php');
$nik = $_SESSION["nik"];
$data = $db->query("select * from `pengaduan` where nik= '$nik'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css"></link>
    <title>Data Laporan</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
            CRUD - BS5
            </a> -->
        </div>
    </nav>
    <!--judul-->
    <div class="container">
        <h1 class="mt-4">Data Laporan Masyarakat</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang telah disimpan di database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD<cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="isi_laporan.php" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <a href="tampilan.php" class="btn btn-primary mb-3">
            <i class="fa fa-hand-o-left"></i>
            Back
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                      <th><center>Id</center></th>  
                      <th><center>Tanggal</center></th>  
                      <!-- <th><center>nik</center></th>   -->
                      <th><center>isi_laporan</center></th>  
                      <th><center>foto</center></th>  
                      <th><center>status</center></th>
                      <th><center>Aksi</center></th>  
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $datas) :?>
                    <tr>
                        <td><center><?= $datas['id_pengaduan']?></center></td>
                        <td><center><?= $datas['tgl_pengaduan']?></center></td>
                        <!-- <td><center><?= $datas['nik']?></center></td> -->
                        <td><center><?= $datas['isi_laporan']?></center></td>
                        <td><center><img src="<?='../img_laporan/' . $datas['foto'] ?>" width="100px"></center></td>
                        <td><center><?= $datas['status']?></center></td>
                        <td>
                            <center>
                                <a href="data_detail.php?id_pengaduan=<?= $datas['id_pengaduan'] ?>" type="button" class="btn btn-success btn-sm">
                                    <i class="fa fa-info"></i>
                                </a>
                                <a href="update_laporan.php?id_pengaduan=<?= $datas['id_pengaduan'] ?>" type="button" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="proses_hapus.php?id_pengaduan=<?= $datas['id_pengaduan'] ?>" type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </center>    
                        </td>
                    </tr>
                    <?php endforeach ;?>
                    <!-- <tr>
                        <td><center>2</center></td>
                        <td><center>11-januari-2005</center></td>
                        <td><center>100</center></td>
                        <td><center>terdapat biawak</center></td>
                        <td><center></center></td>
                        <td><center>0</center></td>
                        <td>
                            <center>
                                <button type="button" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </center>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>