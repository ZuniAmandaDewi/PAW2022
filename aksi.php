<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "INSERT into tbl_051 values ('$kode','$nama')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Penambahan Data Gagal";
} else {
	echo "Penambahan Data Berhasil <br>";
	echo "<a href='tbl_051.php'> Show Data</a>";
}
?>