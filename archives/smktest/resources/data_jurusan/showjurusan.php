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
	<h2>Daftar Jurusan</h2>
	<hr>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>No</td>
			<td>Jurusan</td>
			<td>Singkatan</td>
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
		</tr>
			<?php 
			$no++;
		}
	?>
	</table>
</body>
</html>