<?php

//koneksi ke function
include "../function.php";

$obSpbu = new spbu;
    $id = $_GET['qid'];
    $kategori = $_POST['fkat'];
    $alamat = $_POST['falamat'];
    $nama = $_POST['fnama'];
    $lat = $_POST['flat'];
	$lng = $_POST['flng'];

	
	$obSpbu->update($id,$kategori, $nama,  $alamat, $lat, $lng);
	
	
	//kembali ke form
	header ("location: data_spbu.php");
?>