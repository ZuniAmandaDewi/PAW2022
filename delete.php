<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from tbl_051 where kodeProv=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
		echo "Delete Gagal";
	} else {
		echo "Delete Berhasil<br>";
		echo "<a href='tbl_051.php'>Lihat Data</a>";
	}
?>