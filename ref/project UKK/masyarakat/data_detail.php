<?php
include('../koneksi.php');
include('session.php');
$id_pengaduan = $_GET["id_pengaduan"];
$data = $db->query("select * from `pengaduan` where id_pengaduan= '$id_pengaduan'");
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
    <title>Data_Detail</title>
</head>
<body>
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
            <h1>TANGGAPAN</h1>
            <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                      <!-- <th><center>nik</center></th>   -->
                      <th><center>tgl_tanggapan</center></th>  
                      <th><center>tanggapan</center></th>  
                      <th><center>id_petugas</center></th>  
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `tanggapan` WHERE id_pengaduan='$id_pengaduan'";
                    $query = $db->query($query);
                    $data = $query->fetchAll();
                     foreach ($data as $datas) :
                    ?>
                    <tr>
                        <td><center><?= $datas['tgl_tanggapan']?></center></td>
                        <td><center><?= $datas['tanggapan']?></center></td>
                        <td><center><?= $datas['id_petugas']?></center></td>
                        
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
    </body>
</html>