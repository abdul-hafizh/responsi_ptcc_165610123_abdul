<?php
	include "koneksi_db.php";
	
	$nim = $_GET['nim'];
	mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim = '$nim'") or die(mysql_error());
	 
	header("location:tampil.php");
?>

