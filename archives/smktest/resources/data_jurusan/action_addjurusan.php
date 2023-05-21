<?php 
	include '../../koneksi.php';
	$no= $_POST['no'];
	$jurusan= $_POST['jurusan'];
	$singkatan= $_POST['singkatan'];
	$sql= "insert into jurusan(no,jurusan,singkatan) values('$no','$jurusan','$singkatan')";
	$query= mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:daftarjurusan.php');
	}
	else
	{
		echo "Saving Failed, Please Try Again";
	}
?>