<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Skill issue</title>
	<style type="text/css">
		body{
			margin: 5px 80px 5px 80px;
		}
		.header{
			background-color: red;
			width: 100%;
			height: 150px;
			margin: auto;
		}
		.konten{
			background-color: blue;
			width: 100%;
			height: 380px;
			margin: auto;
		}
		.kiri{
			background-color: cyan;
			width: 25%;
			height: 380px;
			float: left;
		}
		.kanan{
			background-color: blue;
			width: 75%;
			height: 380px;
			float: right;
		}
		.footer{
			background-color: yellow;
			width: 100%;
			height: 75px;
			clear: both;	
		}
		table, a{
			font-size: 50px;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="header"></div>
	<div class="konten">
	<div class="kiri">
		Selamat Datang, <?php echo "Lut";?>!<br><br><br>
	<table style="text-align: center;" name="tabel" border="0">
		<td>
			<tr><a href="_assets/siswa/tambahdata.php" target="kanan">Tambah Data</a></tr><br>
			<tr><a href="_assets/siswa/lihatdata.php" target="kanan">Lihat Data</a></tr><br>
			<tr><a href="logout.php">Logout</a></tr>
		</td>
	</table>
	</div>
	<div class="kanan">
		<iframe name="kanan" width="100%" height="380"></iframe>
	</div>
	</div>
	<div class="footer"></div>
</body>
</html>