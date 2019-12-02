<?php

//koneksi ke function
include "function.php";

$obTransportasi = new transportasi;
    $id = $_POST['fid'];
    $kategori = $_POST['fkat'];
    $alamat = $_POST['falamat'];
    $nama = $_POST['fnama'];
    $lat = $_POST['flat'];
	$lng = $_POST['flng'];

	
	$obTransportasi->update($id,$kategori, $alamat, $nama, $lat, $lng);
	
	
	//kembali ke form
	header ("location: lihatData.php");
?>