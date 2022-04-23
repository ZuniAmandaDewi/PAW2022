<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
	<table border="1" width="1000px" align="center">
		<caption><b>TABEL Mahasiswa</b></caption>
		<tr>
			<td><b>ID Mahasiswa</b></td>
			<td><b>Nama Mahasiswa</b></td>
			<td><b>Email Mahasiswa</b></td>
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
			<td><?=$row['id_051'];?></td>
			<td><?=$row['nama_051'];?></td>
			<td><?=$row['email_051'];?></td>
			<td><a href="formEdit.php?id=<?=$row['id_051']?>">Edit | <a href="delete.php?id=<?=$row['id_051']?>"> Delete</td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="4" align="center"><?php
				echo "<a href='formInput.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
</body>
</html>
