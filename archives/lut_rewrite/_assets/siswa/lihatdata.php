<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
	include "../../config/koneksi.php";
	$query = mysqli_query($koneksi,"SELECT * FROM siswa");
?>
<table cellpadding="5" cellspacing="2" border="1" width="100%">
	<tr>
		<th>Nis</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tempat / Tanggal Lahir</th>
		<th>Telepon</th>
		<th>Jenis Kelamin</th>
		<th>Jurusan</th>												
		<th>Aksi</th>
	</tr>
<?php
	while ($data=mysqli_fetch_array($query)) {
?>
	<tr>
		<td><?php echo $data['nis'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['ttl'];?></td>
		<td><?php echo $data['telepon'];?></td>
		<td><?php echo $data['jk'];?></td>
		<td><?php echo $data['jurusan'];?></td>
		<td>
			<?php echo "<a href=editdata.php?nis=$data[nis]>Edit</a> || <a href=hapusdata.php?nis=$data[nis]>Hapus</a>"?>
		</td>
	</tr>
<?php
	}
?>
</table>
</body>
</html>