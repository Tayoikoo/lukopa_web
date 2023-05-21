<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cari siswa</title>
</head>
<body>
	<h2>Find Data siswa</h2>
	<form action="target_findsiswa.php" method="POST">
		<table>
			<tr>
				<td>Input Keyword</td>
				<td> : </td>
				<td><input type="text" name="cari"></td>
			</tr>
			<tr>
				<td>Find By</td>
				<td> : </td>
				<td>
					<select name="pilihan">
						<option value="nis">NIS</option>
						<option value="nama">Nama Siswa</option>
						<option value="jurusan">Jurusan</option>
					</select>
				</td>
				<tr>
					<td> <input type="submit" value="Cari">
				</td>
		</table>
	</form>
</body>
</html>