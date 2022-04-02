<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "UPDATE tbl_051 set namaProv='$nama' where kodeProv=$kode";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Update Data Gagal";
} else {
	echo "Update Data Berhasil <br>";
	echo "<a href='tbl_051.php'> Show Data</a>";
}
?>