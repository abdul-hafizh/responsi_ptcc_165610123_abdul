<?php
include('crudMhs.php');

$edit = $_POST['edit'];

if($edit == "Edit"){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$hasil = ubah($nim,$nama,$alamat,$tgl_lahir);
}
	header("Location: tampil.php");
?>

