<?php 
	session_start();
	if(isset($_SESSION['username'])){
		include '../../koneksi.php';
	} else{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
</head>
<body>
	<h2>Daftar Jurusan</h2>
	<hr>
	<center><input type="button" value="Tambah Data Jurusan" onclick="location.href='addjurusan.php'"></center>
	<br>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>No</td>
			<td>Jurusan</td>
			<td>Singkatan</td>
			<td>Aksi</td>
		</tr>
	<?php 
		$no=1;
		$sql= "SELECT * FROM jurusan";
		$query= mysqli_query($db_link,$sql);
		while ($data = mysqli_fetch_array($query))
		{
		?>
		<tr>
			<td><?php echo "$data[no]"; ?></td>
			<td><?php echo "$data[jurusan]"; ?></td>
			<td><?php echo "$data[singkatan]"; ?></td>

			<td>
				<button><a href="editjurusan.php?id=<?php echo "$data[no]"; ?>">Edit</a></button> ||
				<button><a href="deletejurusan.php?id=<?php echo "$data[no]"; ?>" onclick="return confirm('Do you want to Delete This?')">Delete</a></button>
			</tr>
			<?php 
			$no++;
		}
	?>
	</table>
</body>
</html>