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
            height : 450px;
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
		tbody {
		  display:block;
		  max-height:280px;
		  overflow-y:auto;
		  }
		  thead, tbody tr {
			  display:table;
			  width:100%;
			  table-layout:fixed;
		  }
		  thead {
			  width: calc( 100% - 1em )
		  }

      .footer{
          width : 100%;
          height : 40px;
          background-color : #0D6C91;
          margin-top : -33px;
          position : relative;
          color : #fff;
          font-family : Montserrat Light;
          text-align : center;
          padding : 5px;
          font-size : 15px;
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
          $obTransportasi = new transportasi;
          $qry = $obTransportasi->tampil_data();
    ?>
    <div class="container-data">
    <div class="header-data">
        <h3>DATA TITIK INFRANSTRUKTUR TRANSPORTASI <br> KOTA SURAKARTA</h3>
    </div>
    <div class="container-fluid">
    <!-- cetak data dengan tampilan Tabel -->
    <a href="index.php" class="btn btn-primary btn-sm mb-2">Lihat Peta</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btn-sm mb-2" data-toggle="modal" data-target="#ModalAdd">
      Tambah Data
    </button>
    <table class="table table-hover border-bottom" >
        <thead>
            <tr class="table-primary">
				        <th width="60px">NO. </TH>
                <th width="120px">KATEGORI </th>
                <th width="190px">NAMA </th>
                <th>ALAMAT </th>
                <th width="150px">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Jika data tidak ada
            $no=1;
            while($row=$obTransportasi->fetch($qry)){
            ?>
            <tr>
                <td width="60px"><?php echo $no ?></td>
                <td width="120px"><?php echo $row ["Kategori"] ?></td>
                <td width="190px"><?php echo $row ["Nama"] ?></td>
                <td><?php echo $row ["Alamat"] ?></td>
                <td width="150px">
                  <a class="btn btn-outline-primary btn-sm" href="editData.php?qid=<?php echo $row['Id'] ?>">Edit</a>
                  <a class="btn btn-outline-danger btn-sm" href="hapusData.php?qid=<?php echo $row['Id'] ?>"onclick="return confirm('Yakin Hapus?')">Hapus</a>
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
</div>
  <!-- END JUMBOTRON -->
    



<!-- Modal Tambah Data-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form action= "sv_addData.php" method="post" class="col-sm-10 m-auto">

        <div class="form-group">
          <label for="fnama">NAMA :</label>	
          <input class="form-control" type="text" name="fnama" id="fnama" required>
        </div>

                  <div class="form-group">
          <label for="fkota">KATEGORI :</label>	
          <select class="form-control" name="fkat" id="fkat">
            <?php
              $arrkat = array('Halte','Halte BST','Terminal','Stasiun');
              sort($arrkat);
              foreach ($arrkat as $kategori) {						//print arary kota untuk pilihannya
                echo "<option value=$kategori ";					//pembuka option
                if($kategori==$row['Kategori']){}		//membuat value default dari database
                else{echo "> $kategori </option>";};						//closing option
              }
            ?>
          </select>
        </div>


        <div class="form-group">
          <label for="falamat">ALAMAT :</label>	
          <input class="form-control" type="text" name="falamat" id="falamat" required>
        </div>

        <div class="form-group">
          <label for="flat">LATTITUDE :</label>	
          <input class="form-control" type="text" name="flat" id="flat"  required>
        </div>

                  <div class="form-group">
          <label for="flng">LONGITUDE :</label>	
          <input class="form-control" type="text" name="flng" id="flng"  required>
        </div>

        <div class="footer-card">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn button col-4 btn-sm">submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>

        <div class="footer">
            Copyright &#169; 2019 Muhammad Abdul Chakam.All Rights Reserved
        </div>

        <script src="bootstrap4/jquery/jquery.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>