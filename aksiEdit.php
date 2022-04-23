<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "UPDATE tbl_051 set nama_051='$nama', email_051 ='$email' where id_051=$id";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Update Data Gagal";
} else {
	echo "Update Data Berhasil <br>";
	echo "<a href='tbl_051.php'> Show Data</a>";
}
?>