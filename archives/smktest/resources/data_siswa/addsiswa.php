<?php 
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h3> Tambah - Daftar Siswa</h3>
		<hr>
		<form action="action_addsiswa.php" method="POST">
		<table border="0">
			<tr>
				<td>Id: </td>
				<td><input type="text" name="nis" id="nis"></td>
			</tr>
		<tr>
			<td>Nama Siswa: </td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>
		<tr>
			<td>Kelas: </td>
			<td><input type="text" name="kelas" id="kelas"></td>
		</tr>
		<tr>
			<td>Jurusan: </td>
			<td><input type="text" name="jurusan" id="jurusan"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan"></td>
		</tr>
		</table>
		</form>
</body>
</html>