<?php
$db = mysqli_connect("localhost","root","","datasiswa");

$result = mysqli_query($db, "SELECT * FROM tbdatasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-green">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['class'];?></td>
      <td><a href="formup.php?Id=<?=$row['Id'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?Id=<?=$row['Id'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
    </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
        <a href="isidata.php" class="btn btn-danger">nambah data</a>
    </div>
</body>
</html>
