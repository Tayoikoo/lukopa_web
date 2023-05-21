<?php
	session_start();
	include "../../config/koneksi.php";
	$id = $_GET['nis'];
	$sql = "DELETE FROM siswa WHERE nis = $id";
	$query = mysqli_query($koneksi,$sql);
	header("location:lihatdata.php")
?>