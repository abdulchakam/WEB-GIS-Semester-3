<?php
	//koneksi ke function
include "../function.php";

$obSpbu= new spbu;

	$qid = $_GET['qid'];

   //buat perintah sql
	$obSpbu->hapus_data($qid);
?>