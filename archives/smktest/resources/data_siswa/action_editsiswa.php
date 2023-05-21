<?php 
	include '../../koneksi.php';
	$id= $_GET['id'];
	$nis= $_POST['nis'];
	$nama= $_POST['nama'];
	$kelas= $_POST['kelas'];
	$jurusan = $_POST['jurusan'];

		$sql ="UPDATE siswa SET nis= '$nis', nama= '$nama', kelas= '$kelas', jurusan= '$jurusan' WHERE nis= '$id'";
		$query = mysqli_query($db_link,$sql);
		if($query)
		{
			header('location:daftarsiswa.php');
		}
		else{
			echo "Failed To Edit Siswa, Please Try Again";
		}
?>