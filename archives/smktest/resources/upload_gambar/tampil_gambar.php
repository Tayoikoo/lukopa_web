<?php 
	//konek ke database
	include '../../koneksi.php';

	//mengambil gambar dari database
	$query = $db_link->query("SELECT * FROM gambar ORDER BY diupload DESC");

	if($query->num_rows > 0){
		while($row = $query->fetch_assoc()){
			$imageURL = 'uploads/'.$row["nama_file"];
	?>
		<?php echo "<img src=$imageURL width='150' height='150'>"; ?>
<?php }
}else{ ?>
	<p align="center">Gambar Kosong kaya hati kamu....</p>
<?php } ?>