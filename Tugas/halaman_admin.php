<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	

	<div class="col-md-8">
		
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>id pengguna</th>
					<th>Artikel</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				$sql = "SELECT * FROM artikel ORDER BY id ASC";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

				$no = 1;
				while($data = mysqli_fetch_array($query)){
				$id = $data["id"];
				$artikel = $data["artikel"];
				

				echo "<tr>
				<td>$no</td>
				<td>$id</td>
				<td>$artikel</td>
				
				<td>
					<a href='ubah-data.php?ubah_id=$id'>Ubah</a>
					<a href='delete.php?hapus_id=$id'>Hapus</a>	
				</td>
				</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>

	<a href="logout.php">LOGOUT</a>
</div>
</body>
</html>