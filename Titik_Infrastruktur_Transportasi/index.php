<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
        <script src="bootstrap4/jquery/jquery.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
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
          background-attachment : fixed;
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
        <title>Kota Surakarta</title>
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
<div class="jumbotron jumbotron-fluid hero">
      <div class="container">
        <center><img src="images/logo.png" width="400px"/></center>
      </div>
</div>
  <!-- END JUMBOTRON -->
  <div class="container-map">
            <h1>PETA SEBARAN INFRASTRUKTUR TRANSPORTASI <br> DI KOTA SURAKARTA</h1>
            <a href="lihatData.php" class="btn btn-sm btn-info ml-2">Lihat Data</a>
        <div id="map">
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
        
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/multi-style-layer.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/PetaKecamatan_0.js"></script>
        <script src="data/JalanKotaSurakarta_1.js"></script>
        <script src="data/infrastruktur_transportasi.php"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:13
        })
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        }
        function pop_PetaKecamatan_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Provinsi</th>\
                        <td>' + (feature.properties['Provinsi'] !== null ? Autolinker.link(String(feature.properties['Provinsi'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Kota</th>\
                        <td>' + (feature.properties['Nama_Kota'] !== null ? Autolinker.link(String(feature.properties['Nama_Kota'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Kec</th>\
                        <td>' + (feature.properties['Nama_Kec'] !== null ? Autolinker.link(String(feature.properties['Nama_Kec'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kode_Kec</th>\
                        <td>' + (feature.properties['Kode_Kec'] !== null ? Autolinker.link(String(feature.properties['Kode_Kec'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_PetaKecamatan_0_0() {
            return {
                pane: 'pane_PetaKecamatan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: '#24303E',
            }
        }
        map.createPane('pane_PetaKecamatan_0');
        map.getPane('pane_PetaKecamatan_0').style.zIndex = 400;
        map.getPane('pane_PetaKecamatan_0').style['mix-blend-mode'] = 'normal';
        var layer_PetaKecamatan_0 = new L.geoJson(json_PetaKecamatan_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_PetaKecamatan_0',
            onEachFeature: pop_PetaKecamatan_0,
            style: style_PetaKecamatan_0_0,
        });
        bounds_group.addLayer(layer_PetaKecamatan_0);
        map.addLayer(layer_PetaKecamatan_0);
        function pop_JalanKotaSurakarta_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? Autolinker.link(String(feature.properties['REMARK'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? Autolinker.link(String(feature.properties['LCODE'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalanKotaSurakarta_1_0(feature) {
            switch(String(feature.properties['REMARK'])) {
                case 'Jalan Arteri':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: 'rgba(244,212,125,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 5.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: '#222B3A',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: '#39414E',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1,
                fillOpacity: 0,
            }
                    break;
            }
        }
        function style_JalanKotaSurakarta_1_1(feature) {
            switch(String(feature.properties['REMARK'])) {
                case 'Jalan Arteri':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: 'rgba(255,242,175,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'round',
                weight: 4.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: '#39414E',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'round',
                weight: 4,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_JalanKotaSurakarta_1',
                opacity: 1,
                color: '#39414E',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'round',
                weight: 1,
                fillOpacity: 0,
            }
                    break;
            }
        }
        map.createPane('pane_JalanKotaSurakarta_1');
        map.getPane('pane_JalanKotaSurakarta_1').style.zIndex = 401;
        map.getPane('pane_JalanKotaSurakarta_1').style['mix-blend-mode'] = 'normal';
        var layer_JalanKotaSurakarta_1 = new L.geoJson.multiStyle(json_JalanKotaSurakarta_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalanKotaSurakarta_1',
            onEachFeature: pop_JalanKotaSurakarta_1,
            styles: [style_JalanKotaSurakarta_1_0,style_JalanKotaSurakarta_1_1,]
        });
        bounds_group.addLayer(layer_JalanKotaSurakarta_1);
        map.addLayer(layer_JalanKotaSurakarta_1);
        function pop_infrastruktur_transportasi_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kategori</th>\
                        <td>' + (feature.properties['Kategori'] !== null ? Autolinker.link(String(feature.properties['Kategori'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama</th>\
                        <td>' + (feature.properties['Nama'] !== null ? Autolinker.link(String(feature.properties['Nama'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Lat</th>\
                        <td>' + (feature.properties['Lat'] !== null ? Autolinker.link(String(feature.properties['Lat'])) : '') + '</td>\
                    </tr>\
					<tr>\
                        <th scope="row">Lng</th>\
                        <td>' + (feature.properties['Lng'] !== null ? Autolinker.link(String(feature.properties['Lng'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }
		 
		var myicon_halte=L.icon({
			iconUrl : 'legend/infrastruktur_transportasi_2_Halte0.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});
		
		var myicon_halteBST=L.icon({
			iconUrl : 'legend/infrastruktur_transportasi_2_HalteBST1.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});
		
		var myicon_stasiun=L.icon({
			iconUrl : 'legend/infrastruktur_transportasi_2_Stasiun2.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});
		
		var myicon_terminal=L.icon({
			iconUrl : 'legend/infrastruktur_transportasi_2_Terminal3.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});

        function style_infrastruktur_transportasi_2_0(feature) {
            switch(String(feature.properties['Kategori'])) {
                case 'Halte':
                    return {
                pane: 'pane_infrastruktur_transportasi_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,140,79,1.0)',
				icon:myicon_halte,
            }
                    break;
                case 'Halte BST':
                    return {
                pane: 'pane_infrastruktur_transportasi_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(97,100,209,1.0)',
				icon:myicon_halteBST,
            }
                    break;
                case 'Stasiun':
                    return {
                pane: 'pane_infrastruktur_transportasi_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,88,192,1.0)',
				icon:myicon_stasiun,
            }
                    break;
                case 'Terminal':
                    return {
                pane: 'pane_infrastruktur_transportasi_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(15,201,158,1.0)',
				icon:myicon_terminal,
            }
                    break;
            }
        }
        map.createPane('pane_infrastruktur_transportasi_2');
        map.getPane('pane_infrastruktur_transportasi_2').style.zIndex = 402;
        map.getPane('pane_infrastruktur_transportasi_2').style['mix-blend-mode'] = 'normal';
        var layer_infrastruktur_transportasi_2 = new L.geoJson(json_infrastruktur_transportasi_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_infrastruktur_transportasi_2',
            onEachFeature: pop_infrastruktur_transportasi_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_infrastruktur_transportasi_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_infrastruktur_transportasi_2);
        map.addLayer(layer_infrastruktur_transportasi_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'infrastruktur_transportasi<br /><table style="margin-left:15px;" width="90%"><tr><td style="text-align: center;"><img src="legend/infrastruktur_transportasi_2_Halte0.png" width="20px"/></td><td>Halte</td></tr><tr><td style="text-align: center;"><img src="legend/infrastruktur_transportasi_2_HalteBST1.png"  width="20px"/></td><td>Halte BST</td></tr><tr><td style="text-align: center;"><img src="legend/infrastruktur_transportasi_2_Stasiun2.png" width="20px" /></td><td>Stasiun</td></tr><tr><td style="text-align: center;"><img src="legend/infrastruktur_transportasi_2_Terminal3.png"  width="20px" /></td><td>Terminal</td></tr></table>': layer_infrastruktur_transportasi_2,'Jalan Kota Surakarta<br /><table style="margin-left:15px;" width="90%" ><tr><td style="text-align: center;"><img src="legend/JalanKotaSurakarta_1_JalanArteri0.png" /></td><td>Jalan Arteri</td></tr><tr><td style="text-align: center;"><img src="legend/JalanKolektor.png" /></td><td>Jalan Kolektor</td></tr><tr><td style="text-align: center;"><img src="legend/JalanLokal.png" /></td><td>Jalan Lokal</td></tr></table>': layer_JalanKotaSurakarta_1,'<img src="legend/PetaKecamatan.png" /> Peta Kecamatan': layer_PetaKecamatan_0, },{collapsed:false}).addTo(map);
		setBounds();
        var i = 0;
        layer_PetaKecamatan_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Nama_Kec'] !== null?String('<div style="color: #fff; text-shadow: 0px 1px 5px #000; font-size: 10pt; font-weight: bold; font-family: \'Montserrat SemiBold\', sans-serif;">' + layer.feature.properties['Nama_Kec']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_PetaKecamatan_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_infrastruktur_transportasi_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Nama'] !== null?String('<div style="color: #0077ed; font-size: 8pt; font-family: \'Montserrat Medium\', sans-serif;">' + layer.feature.properties['Nama']) + '</div>':''), {permanent: true, offset: [-30, -40], className: 'css_infrastruktur_transportasi_2'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_PetaKecamatan_0,layer_infrastrukturtransportasi_2]);
        map.on("zoomend", function(){
            resetLabels([layer_PetaKecamatan_0,layer_infrastrukturtransportasi_2]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_PetaKecamatan_0,layer_infrastrukturtransportasi_2]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_PetaKecamatan_0,layer_infrastrukturtransportasi_2]);
        });
        </script>
		

    </body>
</html>
