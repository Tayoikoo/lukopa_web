<!DOCTYPE html>
<html>
<head>
	<title>Smk Indonesia Test</title>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
	<div class="Header"><img src="gambar/banner3.jpg" width="800" height="150"></div>
	<div class="Menu">
	||<a href="resources/home.php" target="konten"><button>Home</button></a>||
	<a href="resources/csstest.php" target="konten"><button>CSS</button></a>||
	<button><a href="resources/data_siswa/showsiswa.php" target="konten">Data Siswa</a></button> ||
	<button><a href="resources/data_jurusan/showjurusan.php" target="konten">Data Jurusan</a></button> ||
	<button><a href="https://www.google.com" target="_blank">Google</a></button> ||
	<button><a href="https://www.facebook.com" target="_blank">facebook</a></button> ||
	</div>
	<div class="konten">
	<div class="kiri">
	<div class="Kiri_atas"><br><br><br>
		<form action="adminhome.php" method="post" style="background-color: white; color: black;">
		username: <input type="text" name="username"><br>
		password: <input type="password" name="password"><br>
		<input type="submit" value="Login"><input type="reset">
		</form>
	</div>
	<div class="Kiri_bawah"><img src="gambar/school.png" width="200" height="200"></div>
	</div>
	<div class="kanan">
	<iframe frameborder="0" width="600" height="400" scrolling="auto" name="konten"></iframe>
	</div>
	</div>
	<div class="footer">
		<marquee style="color: white; background-color: black;">Terimakasih telah datang di situs kami</marquee>
	</div>
</body>
</html>