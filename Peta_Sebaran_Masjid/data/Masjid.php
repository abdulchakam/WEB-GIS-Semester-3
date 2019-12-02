<?php

	include"../koneksi.php";
	$sql = "SELECT * FROM masjid WHERE lng>0";
	$hasil = mysqli_query($conn,$sql);

?>
var json_Masjid_2 = {
"type": "FeatureCollection",
"name": "Masjid_2",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [

<?php

	while($data=mysqli_fetch_array($hasil)){
		$id = $data['id'];
		$nama = $data['Nama'];
		$lat = $data['Lat'];
		$lng = $data['Lng'];

?>


{ "type": "Feature", "properties": { "id": <?php echo $id; ?>, "Nama": "<?php echo $nama; ?>" }, "geometry": { "type": "Point", "coordinates": [ <?php echo $lng; ?>, <?php echo $lat; ?> ] } },
<?php
	}
?>
]
}
