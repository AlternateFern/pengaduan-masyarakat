<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
      <h1 class="mb-3 mt-3 text-center mt-3 fw-bold">Isi Data Disini</h1>
    <form action="data.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-10 offset-md-1" style="margin:auto">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
           
              <div class="mb-3 mt-3 text-center mt-3 fw-bold">
              <div class="mb-3">
                </div>
                Nis : 
                <input class="rounded-3 border-light" type="text" name="nis" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 mt-3 text-center mt-3 fw-bold">
                Name : 
                <input class="rounded-3 border-light" type="text" name="name" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 mt-3 text-center mt-3 fw-bold">
                Class : 
                <input class="rounded-3 border-light" type="text" name="class" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 mt-3 text-end">
                <button type="submit" class="btn btn-success">save</button>
              </div>
            </form>
        </div>
</body>
</html>