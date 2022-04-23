<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "INSERT into tbl_051 values (null,'$nama','$email')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Penambahan Data Gagal";
} else {
	echo "Penambahan Data Berhasil <br>";
	echo "<a href='tbl_051.php'> Show Data</a>";
}
?>