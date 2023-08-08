<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		        <div class="card-body">
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label>nik :</label>
								<input type="text" class="form-control" name="nik"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>nama :</label>
								<input type="text" class="form-control" name="name"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>username :</label>
								<input type="text" class="form-control" name="username"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>password :</label>
								<input type="text" class="form-control" name="password"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>nomor telpon :</label>
								<input type="text" class="form-control" name="no_tlp"/>
							</div>
						</div>
						<div class="col-md-4">
							
								<button type="submit" class="mt-4 btn btn-md btn-primary"> Simpan</button>
						</div>
						<a href="index.php">back</a>
					</div>
				</div>
			</form>
</body>
</html>