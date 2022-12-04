<?php 

include("../config.php");

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$tipe = $_POST['tipe'];
	$fasil = $_POST['fasil'];


	$sql = "UPDATE kamar SET tipe='$tipe', fasil='$fasil'WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql);

	if ( $query ) {
		header('location: edit-kamar.php');
	}else {
		die("gagal menyimpan perubahan....");
	}
}else{
	die("akses dilarang...");
}
?>