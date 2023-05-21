<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LSP 2023 - Skill issue</title>
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
	</style>
</head>
<body>
	<div class="header"></div>
	<div class="konten">
	<div class="kiri">
		<form action="admin.php" method="POST">
			<table width="100%" border="0">
				<tr>
					<td>Login</td>
				</tr>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="login" value="LOGIN !"></td>
				</tr>								
			</table>
		</form>
	</div>
	<div class="kanan"></div>
	</div>
	<div class="footer"></div>
</body>
</html>