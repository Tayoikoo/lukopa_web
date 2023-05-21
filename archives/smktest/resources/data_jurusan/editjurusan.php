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
	 <h2>Edit Jurusan</h2>
	 	<hr>
	 	<?php 
	 		$id=$_GET['id'];
	 		$sql= "SELECT * FROM jurusan WHERE no='$id'";
	 		$query= mysqli_query($db_link,$sql);
	 		$data= mysqli_fetch_array($query);
	 	?>
	 	<form action='action_editjurusan.php?id=<?php echo "$id";?>' method="POST">
	 		<table border="0">
	 		<tr>
	 			<td>No: </td>
	 			<td><input type="text" name="no" value="<?php echo $data['no']?>"></td>
	 		<tr>
	 			<td>Jurusan: </td>
	 			<td><input type="text" name="jurusan" value="<?php echo $data['jurusan']?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Singkatan: </td>
	 			<td><input type="text" name="singkatan" value="<?php echo $data['singkatan']?>"></td>
	 		</tr>
	 		<tr>
	 			<td><input type="submit" value="save"></td>
	 		</tr>
	 	</table>
	 	</form>
</body>
</html>