<?php
//include konfig untuk konek database 
	include '../../koneksi.php';
	$statusMsg= '';

//coding untuk upload file
	$target= "uploads/";
	$namaFile = basename($_FILES["file"]["name"]);
	$targettujuan = $target . $namaFile;
	$tipefile = pathinfo($targettujuan,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	//memngizinkan format file Yang sesuai
	$allowTypes = array('jpg','png','jpeg','gif','pdf');
	 if(in_array($tipefile, $allowTypes)){
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $targettujuan)){
		// menambahkan gambar ke database
		$insert = $db_link->query("INSERT into gambar (nama_file, diupload) VALUES ('".$namaFile."', NOW())");
			if($insert){
				$statusMsg = "File '.$namaFile.' telah diupload";
			}else{
				$statusMsg = "File gagal diupload, Ulang kali";
			}
		}
		else{
				$statusMsg = "Maaf, Ada masalah saat mengupload file.";
			}
		}
		else{
				$statusMsg = 'Maaf, hanya JPG, JPEG, PNG, GIF dan PDF file yang bisa diupload.';
		}
	}
		else{
				$statusMsg = 'Tolong pilih file yang akan diupload';
		}
// Menampilkan Pesan Status
		echo "$statusMsg";
?>
