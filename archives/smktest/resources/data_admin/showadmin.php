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
	<h2>Manan</h2>
	<hr>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>id</td>
			<td>Username</td>
			<td>Password</td>
		</tr>
	<?php 
		$id=1;
		$sql= "SELECT * FROM admin";
		$query= mysqli_query($db_link,$sql);
		while ($data = mysqli_fetch_array($query))
		{
		?>
		<tr>
			<td><?php echo "$data[id]"; ?></td>
			<td><?php echo "$data[username]"; ?></td>
			<td><?php echo "$data[password]"; ?></td>
		</tr>
			<?php 
			$id++;
		}
	?>
	</table>
</body>
</html>