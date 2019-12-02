<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="./resources/ol3-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <title>Edit Data Kepadatan</title>
</head>
<body>
	<?php 
        include "koneksi.php";
        
        $kode=$_GET['qkode'];
        $sql="select * from kepadatan where KODE_DAGRI='$kode'";
        $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $data=mysqli_fetch_assoc($qry) or die (mysqli_error($conn));
    ?>  
	
	<form action="sv_editdata.php" method="post">
					<input type="hidden" name="fprov" value="<?php echo $data['PROVINSI']; ?>" readonly ><br>
					<input type="hidden" name="fkab" value="<?php echo $data['KABUPATEN']; ?>" readonly > <br>
		Kode Dagri : <input type="text" name="fkode" value="<?php echo $data['KODE_DAGRI']; ?>" readonly > <br>
		Nama Kecamatan : <input type="text" name="fkec" value="<?php echo $data['KECAMATAN']; ?>" readonly > <br>
		Jumlah : <input type="text" name="fjml" value="<?php echo $data['jml']; ?>"><br>

		<button type="submit">Simpan</button>
	</form>
</body>
</html>