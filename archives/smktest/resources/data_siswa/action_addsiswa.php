<?php 
	include '../../koneksi.php';
	$nis= $_POST['nis'];
	$nama= $_POST['nama'];
	$kelas= $_POST['kelas'];
	$jurusan= $_POST['jurusan'];
	$sql= "insert into siswa(nis,nama,kelas,jurusan) values('$nis','$nama','$kelas','$jurusan')";
	$query= mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:daftarsiswa.php');
	}
	else
	{
		echo "Saving Failed, Please Try Again";
	}
?>