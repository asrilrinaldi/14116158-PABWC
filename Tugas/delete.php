<?php
include "koneksi.php";

$nim = $_GET["hapus_nim"];

$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil dihapus";
}else{
	echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>