<!DOCTYPE html>
<html>
<head>
	<title>Tabel Provinsi</title>
</head>
<body>
	<table border="1" width="500px">
		<caption><b>TABEL PROVINSI</b></caption>
		<tr>
			<td><b>Kode Provinsi</b></td>
			<td><b>Nama Provinsi</b></td>
			<td><b>Aksi</b></td>
		</tr>
			<?php
			include "koneksi.php";
			$sql = "SELECT * from tbl_051";
			$hasil = mysqli_query($koneksi,$sql);
			while($row =mysqli_fetch_array($hasil))
			{
			?>
		<tr>
			<td><?=$row['kodeProv'];?></td>
			<td><?=$row['namaProv'];?></td>
			<td><a href="form_edit.php?id=<?=$row['kodeProv']?>">Edit | <a href="delete.php?id=<?=$row['kodeProv']?>"> Delete</td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="3" align="center"><?php
				echo "<a href='form-inputdata.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
	
</body>
</html>
