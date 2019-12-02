<?php
//koneksi ke database
include "koneksi.php";

//salin data ke variabel simpel
$prov  = $_POST ['fprov'];
$kab = $_POST ['fkab'];
$kode = $_POST ['fkode'];
$kec = $_POST ['fkec'];
$jml  = $_POST ['fjml'];

//buat perintah sql_regcase
$sql="update kepadatan set PROVINSI='$prov', KABUPATEN='$kab', KECAMATAN='$kec', jml='$jml' where KODE_DAGRI='$kode'";

//simpan ke database
mysqli_query ($conn,$sql) or die (mysqli_error($conn));

//tutup koneksi
mysqli_close($conn);

//kembali ke form setelah selesai mengisi form
header("location:lihatdata.php");
?>