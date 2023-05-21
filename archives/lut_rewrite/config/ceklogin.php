<?php
	// Session start merupakan fungsi untuk memulai sesi //
	session_start();
	// include berfungsi untuk memasukan file ke dalam file ini //
	include 'koneksi.php';

	/*membuat variabel username dan password*/
	$username = $_POST['username'];
	$password = $_POST['password'];
	//_____________________________________//

	/*membuat variabel dan query untuk menyambungkan kedatabase kemudian
	mengambil salah satu data*/
	$sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
	$query = mysqli_query($koneksi,$sql);
	//____________________________________________________________________________________//
	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_array($query);
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['login'] = 'login';
		header("location:../admin.php");
	}else{
		echo "Login gagal";
	}
?>