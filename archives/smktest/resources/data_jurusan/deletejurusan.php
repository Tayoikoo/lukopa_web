<?php 
	include '../../koneksi.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM jurusan WHERE no = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:daftarjurusan.php');
	}
	else
	{
		echo "Delete Failed, Try again";
	}
?>