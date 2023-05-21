<?php
	session_start();
	if(isset($_SESSION['username'])) {
		include '../../koneksi.php';
	}else{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa</title>
</head>
<body>
	<h2>Mananjemen Siswa</h2>
	<hr>
	<center><input type="button" value="Tambah Data Siswa" onclick="location.href='addsiswa.php'"></center>
	<br>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>NIS siswa</td>
			<td>nama siswa</td>
			<td>Kelas</td>
			<td>Jurusan</td>
			<td>Aksi</td>
		</tr>
	<?php 
		$no=1;
		$sql="SELECT * FROM siswa";
		$query=mysqli_query($db_link,$sql);
		while ($data = mysqli_fetch_array($query)) 
		{
		?>
		<tr>
			<td><?php echo "$data[nis]"; ?></td>
			<td><?php echo "$data[nama]"; ?></td>
			<td><?php echo "$data[kelas]"; ?></td>
			<td><?php echo "$data[jurusan]"; ?></td>
			
			<td>
				<button><a href="editsiswa.php?id=<?php echo "$data[nis]"; ?>">Edit</a></button> ||
				<button><a href="deletesiswa.php?id=<?php echo "$data[nis]"; ?>" onclick="return confirm('Do you want to Delete This?')">Delete</a></button>
			</td>
		</tr>
		<?php 
		$no++;
		}
	?>
	</table>
</body>
</html>