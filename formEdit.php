<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$sql = "SELECT * from tbl_051 where id_051=$id";
		$hasil = mysqli_query($koneksi,$sql);
		while($row =mysqli_fetch_array($hasil))
			{
	?>
	<h2>FORM INPUT DATA</h2>
	<form method="POST" action="aksiEdit.php">
		<table border="0">
			<input type="hidden" name="id" value="<?php echo $row['id_051']?>">
			<tr>
				<td><label for="nama">Nama Mahasiswa:</label></td>
				<td><input id="nama" name="nama" type="text" value="<?php echo $row['nama_051']?>"/></td>
			</tr>
			<tr>
				<td><label for="email">Nama Provinsi:</label></td>
				<td><input id="email" name="email" type="text" value="<?php echo $row['email_051']?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
		<?php
			}
		?>
	</form>
</body>
</html>