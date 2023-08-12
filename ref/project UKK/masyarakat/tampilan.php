<?php
    // include('session_login.php');
    include('session.php');
    // $username = $_SESSION['username'];
    // $password = $_SESSION['password'];
    // var_dump($username);
    // var_dump($password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .decoration{
        text-decoration:none;
    }
</style>
<body>
    <main>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="btn" id="btn"></i>
            <i class="fa fa-arrow-right" id="open">side bar</i>
        </label>
        <div class="sidebar">
            <div class="top">
                Sidebar
            </div>  
            <ul>
                <li><a class="decoration" href="isi_laporan.php"><i class="fa fa-home"></i> Isi Laporan</a></li>
                <li><a class="decoration" href="data.php"><i class="fa fa-user-circle"></i> Data<a><li>
                <li><a class="decoration" href="log-out.php"><i class="bx bx-log-out"></i> Log-Out</a></li>
            </ul>
        </div>
       
       <section class= "section">
        <div class="container">
                <div class="profil" data-tilt>
                    <img src="../img/profil.jpg" style="border-radius: 50%;">
                    <h2>Profile Masyarakat</h2>
                    <p>Selamat Datang Di Profile <?= strtoupper($_SESSION['username']); ?></p>
                </div>
            </div>
            </div>
            <script src="../img/vanilla-tilt.js"> 
            </script>
        </section>
    </main>
</body> 
</html>


<style> 
.section {
    background-image : url("../img/pengaduan pelaporan masyarakar.png");
    background-position: 25%;
    background-position: 60% 25%;
    background-size: revert;
    background-repeat: no-repeat;

}
     .image {
    width : 80%; margin-left : 50vh
  }
    @media only screen and (max-width:1080px) {
 .section {
    background-position: 25%;
    background-position: 110% 25%;
    background-size: revert;
    background-repeat: no-repeat;

  }
}
  body {
    margin: 0;
    font-family: 'Times New Roman' , Times, serif;
    font-size: 1rem;
    color: #212529;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

main {
    display: flex;
    flex-wrap: nowrap;
    height: -webkit-fill-availeble;
    max-height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
}

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}

.sidebar {
    position: fixed;
    left: 0px;
    width: 250px;
    height: 100%;
    background: #74bdcb;
    transition: all 0.5s ease;
}

.sidebar .top {
    font-size: 22px;
    color: #fff;
    text-align: center;
    line-height: 70px;
    background-image: linear-gradient(to right, #fec8a7, #b2d2a4);
}

.sidebar ul a {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: #fff;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(6, 255, 251, 0.1);
    border-bottom: 1px solid rgba(125, 134, 146, 0.302);
    transition: all 0.5s ease;
}

ul li:hover a {
    padding-left: 100px;
    background: #efe7bc;
    color: rgb(0, 0, 0);
}

.sidebar ul a i {
    margin-right: 16px;
}


#check {
    display: none;
}

label #btn {
    position: absolute;
    cursor: pointer;
    background: #ffffff;
    border-radius: 3px;
}

label #open {
    position: absolute;
    cursor: pointer;
    background: #924227;
    border-radius: 1px;
    font-size: 30px;
}

label #open {
    left: 0;
    top: 10;
    font-size: 30px;
    color: rgb(255, 255, 255);
    padding: 6px 12px;
    transition: all 0.5s ease;
}

label #btn {
    z-index: 1111;
    left: 195px;
    top: 25px;
    font-size: 20px;
    color: #000000;
    padding: 4px 9px;
    transition: all 0.5s ease;
}

#check:checked~.sidebar {
    left:-250px;
}

#check:checked~label #open {
    left:30px;
    font-size: 20px;
}

#check:checked~label #btn {
    left:-195px;
}

section {
    background: #ffffff;
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
}

section h1 {
    text-align: center;
    padding-top: 200px;
    font-size: 60px;
    color: #004369;
}
</style>

