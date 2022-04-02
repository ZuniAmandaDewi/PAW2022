<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$sql = "SELECT * from tbl_051 where kodeProv=$id";
		$hasil = mysqli_query($koneksi,$sql);
		while($row =mysqli_fetch_array($hasil))
			{
	?>
	<h2>FORM INPUT DATA</h2>
	<form method="POST" action="update.php">
		<table border="0">
			<input type="hidden" name="id" value="<?php echo $row['kodeProv']?>">
			<tr>
				<td><label for="Kode">Kode Provinsi:</label></td>
				<td><input id="kode" name="kode" type="text" value="<?php echo $row['kodeProv']?>"/></td>
			</tr>
			<tr>
				<td><label for="nama">Nama Provinsi:</label></td>
				<td><input id="nama" name="nama" type="text" value="<?php echo $row['namaProv']?>"/></td>
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