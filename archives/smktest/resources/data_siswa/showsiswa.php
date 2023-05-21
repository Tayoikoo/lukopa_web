<?php 
	include '../../koneksi.php';
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
	<br>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>ID siswa</td>
			<td>nama siswa</td>
			<td>Kelas</td>
			<td>Jurusan</td>
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
		</tr>
		<?php 
		$no++;
		}
	?>
	</table>
</body>
</html>