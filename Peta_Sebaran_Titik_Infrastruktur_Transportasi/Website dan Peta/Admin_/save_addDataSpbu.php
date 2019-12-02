<?php
//koneksi ke function
include "../function.php";

$obSpbu= new spbu;
//salin data ke variabel simpel
    $id = $_POST['fid'];
    $kategori = $_POST['fkat'];
    $alamat = $_POST['falamat'];
    $nama = $_POST['fnama'];
    $lat = $_POST['flat'];
    $lng = $_POST['flng'];


$qry = $obSpbu->tambah_data($id,$kategori,$nama,$alamat,$lat,$lng);


//kembali ke Data setelah selesai mengisi form
header("location:data_spbu.php");
?>