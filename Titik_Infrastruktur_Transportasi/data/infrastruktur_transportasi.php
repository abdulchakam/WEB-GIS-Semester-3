<?php
	include "../koneksi.php";
	$sql = "SELECT * FROM transportasi where Lng>0";
	$hasil = mysqli_query($conn,$sql);
	header('Content-Type:application/javascript');

?>

var json_infrastruktur_transportasi_2 = {
"type": "FeatureCollection",
"name": "infrastruktur_transportasi_2",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
<?php
	while($data=mysqli_fetch_array($hasil)){
		$id = $data['Id'];
		$kat = $data['Kategori'];
		$nama = $data['Nama'];
		$lat = $data['Lat'];
		$lng = $data['Lng'];
?>

{ "type": "Feature", "properties": { "Id": <?php echo $id ?>, "Kategori": "<?php echo $kat ?>", "Nama": "<?php echo $nama ?>", "Lat": <?php echo $lat ?>, "Lng": <?php echo $lng ?> }, "geometry": { "type": "Point", "coordinates": [ <?php echo $lng ?>, <?php echo $lat ?> ] } },

<?php
	}
?>
]
}
