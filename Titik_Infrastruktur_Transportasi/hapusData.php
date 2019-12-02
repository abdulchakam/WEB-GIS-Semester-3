<?php
	//koneksi ke function
include "function.php";

$obTransportasi= new transportasi;

	$qid = $_GET['qid'];

   //buat perintah sql
	$obTransportasi->hapus_data($qid);
?>