<?php
//koneksi ke function
include "function.php";

$obTransportasi= new transportasi;
//salin data ke variabel simpel
    $id = $_POST['fid'];
    $kategori = $_POST['fkat'];
    $alamat = $_POST['falamat'];
    $nama = $_POST['fnama'];
    $lat = $_POST['flat'];
    $lng = $_POST['flng'];


$qry = $obTransportasi->tambah_data($id,$kategori,$alamat,$nama,$lat,$lng);


//kembali ke Data setelah selesai mengisi form
header("location:lihatData.php");
?>