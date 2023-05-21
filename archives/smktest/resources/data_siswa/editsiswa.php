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
	 <h2>Edit Siswa</h2>
	 	<hr>
	 	<?php 
	 		$id=$_GET['id'];
	 		$sql= "SELECT * FROM siswa WHERE nis='$id'";
	 		$query= mysqli_query($db_link,$sql);
	 		$data= mysqli_fetch_array($query);
	 	?>
	 	<form action='action_editsiswa.php?id=<?php echo "$id";?>' method="POST">
	 		<table border="0">
	 		<tr>
	 			<td>NIS Siswa</td>
	 			<td><input type="text" name="nis" id="nis" value="<?php echo $data['nis']?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Nama Siswa</td>
	 			<td><input type="text" name="nama" id="nama" value="<?php echo $data['nama']?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Kelas</td>
	 			<td><input type="text" name="kelas" id="kelas" value="<?php echo $data['kelas']?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Jurusan</td>
	 			<td><input type="text" name="jurusan" value="<?php echo $data['jurusan']?>"></td>
	 		</tr>
	 		<tr>
	 			<td><input type="submit" value="save"></td>
	 		</tr>
	 	</table>
	 	</form>
</body>
</html>