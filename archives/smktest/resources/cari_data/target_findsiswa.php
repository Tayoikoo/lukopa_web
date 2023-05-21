<?php 
	include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
</head>
<body>
	<h2> Hasil Pencarian </h2>
	<?php 
		$cari = $_POST['cari'];
		$pilihan = $_POST['pilihan'];
		if(empty($cari)){
			echo "Maaf, Masukkan Keyword dulu";
		} else {
			$sql = "SELECT * FROM siswa where $pilihan like '%$cari%'";
			$query = mysqli_query($db_link,$sql);
			$count = mysqli_num_rows($query);
			$limit = 5;
			if($count == 0){
				echo "No Data";
			} else {
			?>
			<table border="1" cellspacing="0" cellpadding="5">
				<tr>
					<td> Nis</td>
					<td> Nama Siswa</td>
					<td> Kelas</td>
					<td> Jurusan</td>
				</tr> 
			<?php 
				echo "Hasil pencarian $pilihan dengan keyword '$cari' Sebanyak : $count data";
				$k = 1;
				while($data=mysqli_fetch_array($query)){
					?>
				<tr>
					<?php 
					echo "
					<td> $data[nis] </td>
					<td> $data[nama] </td>
					<td> $data[kelas] </td>
					<td> $data[jurusan] </td>
					</tr>";
					$k++;
				}
				echo "</table>";
			}
		}
			echo "</font>";
			?>
			<br>

			<table>
				<tr>
					<td><a href="findsiswa.php">Kembali</a></td>
				</tr>
			</table>
</body>
</html>