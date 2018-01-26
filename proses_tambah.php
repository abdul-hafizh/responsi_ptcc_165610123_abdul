<?php
	include('crudMhs.php');

	$nim  = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$hasil = tambah($nim,$nama,$alamat,$tgl_lahir);
			
	header("Location: tampil.php");
?>

