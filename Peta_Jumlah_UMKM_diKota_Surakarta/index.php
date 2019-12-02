<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="./resources/ol3-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
        <style>
        html, body {
            background-color: #f2f2f2;
        }
        </style>
<style>
.tooltip {
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  color: white;
  padding: 4px 8px;
  opacity: 0.7;
  white-space: nowrap;
}
.tooltip-measure {
  opacity: 1;
  font-weight: bold;
}
.tooltip-static {
  background-color: #ffcc33;
  color: black;
  border: 1px solid white;
}
.tooltip-measure:before,
.tooltip-static:before {
  border-top: 6px solid rgba(0, 0, 0, 0.5);
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  content: "";
  position: absolute;
  bottom: -6px;
  margin-left: -7px;
  left: 50%;
}
.tooltip-static:before {
  border-top-color: #ffcc33;
}
.measure-control {
  top: 65px;
  left: .5em;
}
.ol-touch .measure-control {
  top: 80px;
}
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
          box-shadow : 0px 1px 10px rgba(0,0,0,0.5);
        }
        #map{
          width : 100%;
          height : 82%;

        }
        .brand{
          color : #fff;
          font-family : Peace Sans;
          font-size : 20px;
          text-shadow : 0px 2px 10px rgba(0,0,0,0.5);
        }
        .brand:hover{
          color : #ccc;
        }
        .navbar-nav{
          font-size : 18px;
          color : #fff;
        }
        .nav-custom{
          height : 45px;
          background-color : #0D6C91;
          box-shadow : 0px 1px 10px rgba(0,0,0,0.5);
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
          margin-top : 20px;
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
      .modal-title{
          color : #fff;
        }
        .logo{
          margin-top : 60px;
          width : 120px;
          margin-right : -20px;
        }
        .title{
          margin-left : -20px;
        }
        .container-profil{
          width : 100%;
          height : 200px;
          padding-top : 20px;
          position : relative;
        }
        .paragraf{
          margin : 50px;
          font-family : Montserrat Medium;
          font-size : 15px;
          color : #b3b3b3;
          line-height : 30px;
        } 
        b{
          color : #0D6C91;
          font-size : 18px;
        }
        .container1{
          width : 100%;
          height : 190px;
          background-color : #0078A8;
          position : absolute;
          margin-top : 520px;
          box-shadow : 1px 0px 10px rgba(0,0,0,0.5);
          padding-left : 80px;
          padding-right : 80px;
        }
        .footer{
          width : 100%;
          height : 30px;
          background-color : #0D6C91;
          margin-top : 710px;
          position : relative;
          color : #fff;
          font-family : Montserrat Light;
          text-align : center;
          padding : 5px;
        }
        .foto{
          margin-top : -110px;
          position : relative;
        }
        .content{
          width : 50%;
          height : 150px;
          position : absolute;
          margin-left : 260px;
          padding : 10px;
          margin-top : -170px;
          font-family : Montserrat Medium;
          font-size : 15px;
          color : white;
          line-height : 20px;
        }
        </style>
        <title></title>
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
                </div>
              </div>
        </div>      
  </nav>

  <!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
      <div class="container">
        <center><img src="images/logo.png" width="400px"/></center>
      </div>
</div>
  <!-- END JUMBOTRON -->
  <div class="container-map">
        <div id="map">
          <h1>PETA JUMLAH UMKM DI KOTA SURAKARTA <br> TAHUN 2016</h1>
          <!-- Button trigger modal -->
          <a href="lihatData.php" class="btn btn-md btn-info ml-2">Lihat Data</a>
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content">
                </div>
            </div>
        </div>
  </div> 
  
    <div class="container-profil">
        <h1>PROFIL KOTA SURAKARTA</h1> <br>
        <center><img src="images/LogoKota.png" alt="" width="200px;"></center>

        <p align="justify" class="paragraf"><b>Kota Surakarta</b> juga disebut Solo adalah wilayah otonom dengan status Kota di bawah Provinsi Jawa Tengah, Indonesia, 
        dengan penduduk 503.421 jiwa (2010) dan kepadatan 13.636/km2. Kota dengan luas 44 km2, 
        ini berbatasan dengan Kabupaten Karanganyar dan Kabupaten Boyolali di sebelah utara, 
        Kabupaten Karanganyar dan Kabupaten Sukoharjo di sebelah timur dan barat, dan Kabupaten Sukoharjo di sebelah selatan.
         Kota ini juga merupakan kota terbesar ketiga di pulau Jawa bagian selatan setelah Bandung dan Malang menurut jumlah penduduk. 
         Sisi timur kota ini dilewati sungai yang terabadikan dalam salah satu lagu keroncong, Bengawan Solo. Bersama dengan Yogyakarta, 
        Surakarta merupakan pewaris Kesultanan Mataram yang dipecah melalui Perjanjian Giyanti, pada tahun 1755.</p>
    </div>

        <div class="container1">
            <img src="images/walikota.png" class="foto">
            <img src="images/wa-walikota.png" class="foto" align="right">
          <div class="content">
          <p align="center"><font color="white" size="5px" style="text-shadow : 0px 1px 5px rgba(0,0,0,0.5);">Solo Berseri Tanpa Korupsi</font> <br><br>
            Solo Berseri Tanpa Korupsi untuk Mewujudkan Masyarakat 3 WMP (Waras, Wasis, Wareg, Mapan dan Papan) 
            dengan membangun 5 Budhaya (Budhaya Hidup Gotong Royong, Budhaya Memiliki, Budhaya Merawat, Budhaya Menjaga, Budhaya Mengamankan Kota Solo dan isinya).</p>
          </div>
        </div>

        <div class="footer">
            Copyright &#169; 2019 Muhammad Abdul Chakam.All Rights Reserved
        </div>

       <script src="bootstrap4/jquery/jquery.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="./resources/ol3-layerswitcher.js"></script>
        <script src="layers/KotaSurakarta.php"></script>
        <script src="styles/PetaJumlahUMKMdiKotaSurakarta_0_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/qgis2web.js"></script>
        <script src="./resources/Autolinker.min.js"></script>
    </body>
</html>
