<?php
session_start();
if (isset($_SESSION["username"])) {
    $_SESSION['password'] == $_SESSION['password'];
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <h3>Selamat datang!</h3>
        <form class="p-3 mt-3" action="proses/proses_register.php" method="POST">
            <div class="form-group">
                <div class="form-inline">
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Keluarga" required>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" style="margin-left: 40px; width: 49.3%;" required>
                </div>
                <div class="bar bar-anim"></div>

                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                <div class="bar"></div>
                <input type="text" class="form-control" name="telp" id="telp" placeholder="Nomor Telpon" required>
                <div class="bar"></div>
                <div class="form-inline2">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <img src="img/eye.png" width="30px" height="30px" id="togglePassword">
                </div>
                <div class="bar" style="width:90%;"></div>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Konfirmasi Password" required>
                <div class="bar"></div>
                <button type="submit" name="" class="btn mt-3 btn-block btn-grad" style="color:white;font-weight:bold;">Register</button>

            </div>
        </form>
        <div class="text-center">
            <a href="login.php">Sudah Memiliki Akun?</a>
        </div>
    </div>
    </div>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
        });

        // // prevent form submit
        // const form = document.querySelector("form");
        // form.addEventListener('submit', function (e) {
        //     e.preventDefault();
        // });
    </script>
</body>

</html>