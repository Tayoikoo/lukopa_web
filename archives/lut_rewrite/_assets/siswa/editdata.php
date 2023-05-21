<?php
	include "../../config/koneksi.php";

$id = $_GET['nis'];
$sql = "SELECT * FROM siswa WHERE nis='$id'";
$query = mysqli_query($koneksi,$sql);
while ($data = mysqli_fetch_array($query)) {
	$nis = $data['nis'];
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$ttl = $data['ttl'];
	$telepon = $data['telepon'];
	$jk = $data['jk'];
	$jurusan = $data['jurusan'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h3>Edit data</h3>
	<hr>
	<form action="editdata.php?nis=<?php echo "$id";?>" method="POST">
		<table width="100%" border="0">
			<tr>
				<td>Nis :</td>
				<td><input type="text" name="nis" value="<?php echo $nis?>"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" value="<?php echo $nama?>"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal lahir :</td>
				<td><input type="text" name="ttl" value="<?php echo $ttl?>"></td>
			</tr>
			<tr>
				<td>Telepon :</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td><input type="text" name="jk" value="<?php echo $jk?>"></td>
			</tr>									
			<tr>
				<td>Jurusan :</td>
				<td><input type="text" name="jurusan" value="<?php echo $jurusan?>"></td>
			</tr>						
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="edit" value="Edit!"></td>
			</tr>			
		</table>
	</form>
</body>
</html>
<?php
	if (isset($_POST['edit'])) {
		include "../../config/koneksi.php";

		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$ttl = $_POST['ttl'];
		$telepon = $_POST['telepon'];
		$jk = $_POST['jk'];
		$jurusan = $_POST['jurusan'];

		$sql = "UPDATE siswa SET nis='$nis',nama='$nama',alamat='$alamat',ttl='$ttl',telepon='$telepon',jk='$jk',jurusan='$jurusan' WHERE nis=$id";
		$query = mysqli_query($koneksi,$sql);
		if (!$query) {
			echo "gagal";
		}
	}
?>