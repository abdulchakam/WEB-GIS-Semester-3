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
          height : 45px;
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
          background-color : #0D6C91;
          font-family : Montserrat SemiBold;
          color : white;
          margin-left : 10px;
          float : right;
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
            width : 40%;
            height : 370px;
            background-color : #fff;
            position : relative;
            border-radius : 5px;
            box-shadow : 0px 3px 20px rgba(0,0,0,0.5);
            margin : auto;
        }
        .header-data{
            width : 100%;
            height :60px;
            background-color : #0078A8;
            padding : 10px;
            margin-bottom : 20px;
            border-radius : 5px 5px 0px 0px;
        }
        h4{
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
        .footer-card{
          width :100%;
          height : 50px;
          margin-top : 20px;
          padding-top : 10px;
          font-family : Montserrat SemiBold;
          color : white;
        }
        .btn-cancel{
          margin-left : 110px;
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
  <?php
			  require "function.php";
				$qkode = $_GET['qkode'];
				$obUmkm = new umkm;
				foreach($obUmkm->edit_data($qkode) as $row){
  ?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container-data">
    <div class="header-data">
        <h4 class="text-uppercase">EDIT JUMLAH UMKM <br> DI KECAMATAN <?php echo $row['Nama_Kec']; ?></h4>
    </div>
	<div class="container-fluid">
            
				<form action= "sv_editData.php?qkode=<?php echo $qkode ?>" method="post" class="col-md-10 m-auto">
        
					<div class="form-group">
						<label for="fkode">KODE KECAMATAN :</label>	
						<input class="form-control" type="text" name="fkode" id="fkode" value="<?php echo $qkode; ?>" readonly>
					</div>

          <div class="form-group">
						<input class="form-control" type="hidden" name="fprov" id="fprov" value="<?php echo  $row['Provinsi']; ?>" readonly>
					</div>

          <div class="form-group">
            <input class="form-control" type="hidden" name="fkota" id="fkota" value="<?php echo  $row['Nama_Kota']; ?>" readonly>
					</div>

					<div class="form-group">
						<label for="fnama">NAMA KECAMATAN :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" value="<?php echo $row['Nama_Kec']; ?>" readonly>
					</div>

					<div class="form-group">
						<label for="fjml">JUMLAH UMKM :</label>	
						<input class="form-control" type="text" name="fjml" id="fjml" value="<?php echo $row['data_Jml']; ?>" required>
					</div>
					<div class="footer-card">
              <a href="lihatData.php" class="btn btn-md btn-secondary col-4  btn-cancel">Cancel</a>
              <button type="submit" name="submit" class="btn button col-4">submit</button>
          </div>
					
				<?php };?>
				</form>
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