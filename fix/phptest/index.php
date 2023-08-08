<?php

require_once ('koneksi.php');
require_once ('sql.php');

$obj = new crud;

?>
<!DOCTYPE html>
<html>
	<title>Tutorial PHP : CRUD PDO PHP</title>

	<link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="card shadow mb-4 mt-4">
	            <div class="card-header py-3">
	                <h3 class="m-0 font-weight-bold text-primary">Placeholder to test login.php</h3>
	            </div>
	    	<a href="insert.php">add</a>
			<div class="row m-auto">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>NIK</th>
						<th>NAMA</th>
						<th>USERNAME</th>
						<th>PASSWORD</th>
						<th>NO TELP</th>
						<th>AKSI</th>
					</tr>
					<?php 
					$no=1;
						$data=$obj->showData();
						if($data->rowCount()>0){
						while($row=$data->fetch(PDO::FETCH_ASSOC)){
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row['nik']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['no_tlp']; ?></td>
						

						<td>
							<?php echo "<a class='btn btn-sm btn-primary' href='edit.php?id_mahasiswa=".$row['id']."'>edit</a>"; ?>
							<?php echo "<a class='btn btn-sm btn-primary' href='delete.php?id_mahasiswa=".$row['id']."'>delete</a>"; ?>
						</td>
					</tr>
					<?php $no+=1; } $data->closeCursor();

									}else{
										echo '
											<tr>
												<td> Not found</td>
											</tr>
										';
									}
									?>
				</table>
			</div>
		</div>
	</div>

	<script>
	if ( window.history.replaceState ) {
  		window.history.replaceState( null, null, window.location.href );
	}
	</script>

<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>