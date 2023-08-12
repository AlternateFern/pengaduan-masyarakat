<?php
include('../koneksi.php');
$id_pengaduan =$_GET['id_pengaduan'];
$query = $db->query("SELECT * FROM pengaduan Where id_pengaduan='$id_pengaduan'");
$data = $query->fetch();

?>
<!DOCTYPE html style ="width:100;">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css"></link>
    <title>admin page</title>
     <!-- custum css file link -->
</head>
<style>
    body{
        background-image: url('../img/background.jpg');
        background-repeat: no-repeat;
        }
</style>
<body>
    <!-- <img src="https://i0.wp.com/kominfo.cilacapkab.go.id/wp-content/uploads/2019/12/background-hd-wallpaper-batik-biru-scaled.jpg?ssl=1" alt=""> -->
    <div class="form-container py-auto d-flex justify-content-center algin-items-center h-100">
        <form action="proses_update.php?id_pengaduan=<?=$id_pengaduan?>" method="post" enctype="multipart/form-data">
            <h3>Update Laporan Masyarakat</h3>
            <input type="hidden" name="id" value="<?= $data['id_pengaduan'] ?>">
            <textarea name="isi_laporan" type="text" cols="50" rows="10"><?php echo $data['isi_laporan']?></textarea>  
            <input placeholder="UPDATE FOTO" type="file" name="foto" value="<?= $data['foto'] ?>"class="form-control my-auto" id="floatingInput">
            <input type="submit" name="submit" value="submit"  class="form-btn">
            <a href="tampilan.php" class="btn btn-primary mb-3">
            <i class="fa fa-hand-o-left"></i>
            Back
        </a>

        </form>
    </div>
</body>
</html>
<style>
    html{
    height: 100vh;
}

body{
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    height: 100vh;
}

.form-container{
    /* min-height: 100%; */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    /* background: #eee; */
}
.form-container form {
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0.1 );
    background: #fff;
    text-align: center;
    width: 500px ;

}
.form-container h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;

}
.form-container form input, 
.form-container form select{
    width: 100%;
    padding: 10px 1px;
    font-size: 17px;
    margin:8px 0;
    background: #eee;
    border-radius: 5px;

}

.form-container form .form-btn{
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}
.form-container form .form-btn:hover{
    background: crimson;
    color: #fff;
}

.form-container form p{
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-container form p a{
    color: crimson;
}
</style>