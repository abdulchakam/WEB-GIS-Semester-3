<?php

//koneksi ke function
include "function.php";

$obUmkm = new umkm;
    $prov = $_POST['fprov'];
    $kota = $_POST['fkota'];
    $nama_kec = $_POST['fnama'];
    $kode = $_POST['fkode'];
	$jml = $_POST['fjml'];

	
	$obUmkm->update($prov,$kota, $nama_kec,$kode, $jml);
	
	
	//kembali ke form
	header ("location: lihatData.php");
?>