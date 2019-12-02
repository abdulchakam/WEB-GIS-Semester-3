<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="./resources/ol3-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <title>Data Kepadatan</title>
</head>
<body>
		<?php
			//memanggil file berisi perintah koneksi
			include "koneksi.php";

		 //tampilkan data
		$sql="select * from kepadatan order by KODE_DAGRI";
		$hasil=mysqli_query($conn,$sql) or die (mysqli_error($conn));
		?>
		<h1><center>DATA KEPADATAN PENDUDUK KOTA SEMARANG</center></h1>
		<a href="index.php">Lihat Peta</a>
	<table border="1" width="80%" height="70%" align="center">
		<tr bgcolor="orange">
			<th> No.</th>
			<th> KODE DAGRI </th>
			<th> KECAMATAN </th>
			<th> JUMLAH </th>
			<th> AKSI </th>
		<tr>
			 <?php
				//Jika data tidak ada
				$no=1;
				while($row=mysqli_fetch_assoc($hasil)){    
            ?>
		<tr>
				<td><?php echo $no ?></td>
                <td><?php echo $row ["KODE_DAGRI"] ?></td>
                <td><?php echo $row ["KECAMATAN"] ?></td>
                <td><?php echo $row ["jml"] ?></td> 
				<td>
                    <a class="btn btn-outline-primary" href="editdata.php?qkode=<?php echo $row['KODE_DAGRI'] ?>">Edit</a>
                </td>
		</tr>
		<?php
			$no++;
				};
		?>
	</table>
</body>
</html>