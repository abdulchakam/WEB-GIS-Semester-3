<?php
	include "../koneksi.php";
	$sql = "SELECT * FROM spbu where Longitude>0";
	$hasil = mysqli_query($conn,$sql);
	header('Content-Type:application/javascript');

?>

var json_Titik_Sebaran_SPBU_2 = {
"type": "FeatureCollection",
"name": "Titik_Sebaran_SPBU_2",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [

<?php
	while($data=mysqli_fetch_array($hasil)){
		$id = $data['Id'];
		$kat = $data['Kategori'];
		$nama = $data['Nama'];
		$alamat = $data ['Alamat'];
		$lat = $data['Lattitude'];
		$lng = $data['Longitude'];
?>


{ "type": "Feature", "properties": { "Id": <?php echo $id ?>, "Kategori": "<?php echo $kat ?>", "Nama": "<?php echo $nama ?>", "Alamat": "<?php echo $alamat ?>", "Lattitude": <?php echo $lat ?>, "Longitude":<?php echo $lng ?> }, "geometry": { "type": "Point", "coordinates": [ <?php echo $lng ?>, <?php echo $lat ?> ] } },
<?php
	}
?>
]
}
