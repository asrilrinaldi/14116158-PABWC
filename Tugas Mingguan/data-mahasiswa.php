<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Tambah Data Mahasiswa</h3>
		<form action="insert-mahasiswa.php" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>NRP</label>
				<input type="text" name="nrp" class="form-control">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control">
			</div>
			<div class="form-group">
				<label>ID Jurusan</label>
				<input type="text" name="id" class="form-control">
			</div>

			<div class="form-group">
				<label>Foto:</label>
                    <input class="form-control" type="file" name="foto">
			</div>

			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
			<button type="reset" name="hapus" class="btn btn-danger">Clear</button>
		</form>
	</div>
</body>
</html>