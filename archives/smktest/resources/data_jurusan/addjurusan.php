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
	<h3> Tambah - Daftar jurusan</h3>
		<hr>
		<form action="action_addjurusan.php" method="POST">
		<table border="0">
			<tr>
				<td>Id: </td>
				<td><input type="text" name="no" id="no"></td>
			</tr>
		<tr>
			<td>Jurusan: </td>
			<td><input type="text" name="jurusan" id="jurusan"></td>
		</tr>
		<tr>
			<td>Singkatan: </td>
			<td><input type="text" name="singkatan" id="singkatan"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan"></td>
		</tr>
		</table>
		</form>
</body>
</html>