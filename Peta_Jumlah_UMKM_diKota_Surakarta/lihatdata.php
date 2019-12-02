<?php

?>
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
    <title>Data</title>
    </style>
        <style>
        html, body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        .container-map{
          width : 1200px;
          height : 650px;
          background-color : #fff;
          margin-top : -250px;
          padding : 20px;
          margin-left : 80px;
          border-radius : 8px;
          box-shadow : 0px 3px 20px rgba(0,0,0,0.5);
        }
        #map{
          width : 100%;
          height : 82%;

        }
        .brand{
          color : #fff;
          font-family : Peace Sans;
          font-size : 20px;
        }
        .brand:hover{
          color : #ccc;
        }
        .nav-custom{
          height : 50px;
          background-color : #0D6C91;
        }
        .jumbotron{
          background-image : url('images/jumbotron.png');
          background-size : cover;
          height : 768px;
        }
        h1{
          color : #0D6C91;
          font-family : Montserrat SemiBold;
          font-size : 25px;
          text-align : center;
        }
        .button{
          margin-left : 10px;
          background-color : #7F9DC3;
          font-family : Montserrat SemiBold;
          color : white;
        }
        .button:hover{
          background-color : #4C76AB;
          color : #ccc;
        }
        .modal-header{
          background-color : #0D6C91;
        }
      .modal-title{
          color : #fff;
        }
        .close{
          color : #fff;
        }
        .container-data{
            width : 90%;
            height : 400px;
            background-color : #fff;
            position : relative;
            border-radius : 5px;
            box-shadow : 0px 3px 20px rgba(0,0,0,0.5);
            margin-left:70px;
            margin-top : 50px;
        }
        .header-data{
            width : 100%;
            height :50px;
            background-color : #0078A8;
            padding : 10px;
            margin-bottom : 10px;
            border-radius : 5px 5px 0px 0px;
        }
        h3{
            font-family : Montserrat SemiBold;
            color : white;
            text-align : center;
            }
        .logo{
          margin-top : 60px;
          width : 120px;
          margin-right : -20px;
        }
        .title{
          margin-left : -20px;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg nav-custom">
        <div class="container">
            <a class="navbar-brand brand" href="#">
              <img src="images/logo.png" class="logo"/>
              SURAKARTA
            </a>
            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <!-- <a class="nav-item nav-link active" href="#">Home </a> -->
                </div>
              </div>
        </div>      
  </nav>
 <!-- JUMBOTRON -->
 <div class="jumbotron jumbotron-fluid">
    <?php
	        include "function.php";
          $obUmkm = new umkm;
          $qry = $obUmkm->tampil_data();
    ?>
    <div class="container-data">
    <div class="header-data">
        <h3>DATA JUMLAH UMKM DI KOTA SURAKARTA</h3>
    </div>
        <div class="container-fluid">
    <!-- cetak data dengan tampilan Tabel -->
    <a href="index.php" class="btn btn-primary">Lihat Peta</a>
    <table class="table table-hover" >
        <thead>
            <tr class="table-primary">
            	<th>NO.</th>
                <th>KODE KECAMATAN </th>
                <th>NAMA KECAMATAN </th>
                <th>JUMLAH UMKM</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Jika data tidak ada
            $no=1;
            while($row=$obUmkm->fetch($qry)){
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row ["Kode_Kec"] ?></td>
                <td><?php echo $row ["Nama_Kec"] ?></td>
                <td><?php echo $row ["data_Jml"] ?></td>
                <td>
                  <a class="btn btn-outline-primary" href="editData.php?qkode=<?php echo $row['Kode_Kec'] ?>">Edit</a>
                </td>
            </tr>
            <?php
                $no++;
            };
            ?>
        </tbody>
        </table>
            
        </div>
      </div>
</div>
  <!-- END JUMBOTRON -->
    



    </div>
  </div>
</div>
</div>

        <script src="bootstrap4/jquery/jquery.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>