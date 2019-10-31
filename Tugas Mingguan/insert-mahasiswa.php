<?php
include "koneksi.php";


			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$img = $_FILES['foto']['name'];
			$x = explode('.', $img);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['id'];



move_uploaded_file($file_tmp, 'foto/'.$img);
$sql = "INSERT INTO mahasiswa(NRP,nama,alamat,ID_Jur,foto) VALUES('$nrp','$nama','$alamat','$jurusan','$img')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil ditambahkan <br>";
	echo "$nrp<br>";
	echo "$nama <br>";
	echo "$alamat <br>";
	echo "$jurusan <br>";
	echo "$img <br>";

}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>