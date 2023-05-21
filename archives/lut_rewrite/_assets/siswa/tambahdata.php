<?php
	include "../../config/koneksi.php";
?>
<body>
	<h3>Tambah Data</h3>
	<hr>
	<form action="tambahdata.php" method="POST">
		<table width="100%" border="0">
			<tr>
				<td>Nis :</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal Lahir :</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td>Telepon :</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Jenis kelamin :</td>
				<td><input type="text" name="jk"></td>
			</tr>
			<tr>
				<td>Jurusan :</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add" value="Tambah!"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['add'])) {
		session_start();
		include "../../config/koneksi.php";

		$n = $_POST['nis'];
		$na = $_POST['nama'];
		$al = $_POST['alamat'];
		$ttl = $_POST['ttl'];
		$tel = $_POST['telepon'];
		$jk = $_POST['jk'];
		$jur = $_POST['jurusan'];

		$sql = "INSERT INTO siswa(nis,nama,alamat,ttl,telepon,jk,jurusan) VALUES('$n','$na','$al','$ttl','$tel','$jk','$jur')";
		$query = mysqli_query($koneksi,$sql);
		if ($query) {
			echo "data berhasil di tambah!, <a href='lihatdata.php'>Kembali</a>";
		}else{
			echo "GAGAL!";
		}
	}	
?>