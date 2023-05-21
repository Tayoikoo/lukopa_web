<?php 
	include '../../koneksi.php';
	$id= $_GET['id'];
	$no= $_POST['no'];
	$jurusan = $_POST['jurusan'];
	$singkatan = $_POST['singkatan'];
		$sql ="UPDATE jurusan SET no= '$no',jurusan= '$jurusan', singkatan= '$singkatan' WHERE no= '$id'";
		$query = mysqli_query($db_link,$sql);
		if($query)
		{
			header('location:daftarjurusan.php');
		}
		else{
			echo "Failed To Edit Jurusan, Please Try Again";
		}
?>