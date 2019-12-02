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
        <link rel="stylesheet" href="../css/hover.css">
        <link rel="stylesheet" href="../css/hover-min.css">
		<link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <script src="../bootstrap4/jquery/jquery.min.js"></script>
        <script src="../bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap4/js/bootstrap.js" type="text/javascript"></script>
        <style>
        html, body, #map {
            width: 80%;
            height: 80vh;
            padding: 0;
            margin: 0;
            background-color:#fff;
        }
        .container-map{
            width:81%;
            height:71%;
            background: #FFF;
            margin:auto;
            padding :8px;
            border-radius : 10px;
            box-shadow:2px 2px 3px rgba(0,0,0,0.3);
        }
        #map{
            background-color:#AADAFF;
            margin: auto;
            height:100%;
            width:100%;
            border-radius : 5px;
        }
        </style>
		        <style>
        html, body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        .header{
            width:100%;
            height:50px;
            padding-left:20px;
            background:rgb(250,250,250);
            box-shadow: 1px 0px 10px #8C8C8C;
        }
        h3{
            font-family : Montserrat SemiBold;
            text-shadow : 2px 1px 2px rgba(0,0,0,0.3);
            font-size : 23px;
            line-height : 40px;
            color : #AADAFF;
            text-align:center;
        }
        .button-back{
            float:left;
            font-family : Montserrat SemiBold;
            overflow:hidden;
            width:100px;
            height:100px;
            margin-top:0px;
            padding-top:10px;
            padding-left:20px;
        }
        .button-back img{
            width:30px;
            transition: transform .5s ease;
        }
        .button-back:hover img{
            transform: scale(1.3);
        }
        .lihat-data{
            width:100%;
            text-align:center;
        }
        .modal-custom{
            width:1000px;
            margin-left:-200px;
        }
        .my-custom-scrollbar {
            position: relative;
            height: 300px;
            overflow: auto;
            }
            .table-wrapper-scroll-y {
            display: block;
            }
        .modal-header{
            background : #34A6D8;
            text-align : center;
            color:#fff;
        }
        .footer{
            width:100%;
            height:80%;
        }
        .button-petalain{
            float:right;
            margin-top:10px;
            margin-right:50px;
            background-color:#34A6D8;
            border-radius:5px;
            transition: transform .5s ease;
        }
        .button-petalain a{
            color:#fff;
            font-family:Montserrat Medium;
        }
        .button-petalain:hover a{
            background:#fff;
            color:#34A6D8;
            transform: scale(1.1);
        }
        </style>
        <title>Peta Sebaran SPBU dan POM MINI</title>
    </head>
    <body>

    <?php
	    include "../function.php";
        $obSpbu = new spbu;
        $qry = $obSpbu->tampil_data();
    ?>
        <div class="header">
            <div class="button-back">
                <a href="../index.php"><img src="../images/back.png"></a>
            </div>
            <div class="button-petalain button hvr-bounce-in">
                <a href="../Peta_TitikTransportasi" class="btn btn-sm ">Peta Transportasi</a>
            </div>
        </div>
        <h3>PETA SEBARAN TITIK SPBU DAN POM MINI <br> DI KOTA SURAKARTA</h3>
        <div class="container-map">
        <div id="map">
        </div>
        </div>

        <br>
        <div class="lihat-data">
        <button type="button" class="btn btn-outline-primary hvr-bounce-out" data-toggle="modal" data-target="#ModalData">
            Lihat Data
        </button>

            <!-- Modal -->
            <div class="modal fade" id="ModalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">DATA SEBARAN TITIK SPBU DAN POM MINI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered text-left table-sm" >
                    <thead>
                        <tr class="table-primary">
                            <th width="60px">NO. </TH>
                            <th width="220px">NAMA </th>
                            <th>ALAMAT </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Jika data tidak ada
                        $no=1;
                        while($row=$obSpbu->fetch($qry)){
                        ?>
                        <tr>
                            <td width="60px"><?php echo $no ?></td>
                            <td width="220px"><?php echo $row ["Nama"] ?></td>
                            <td><?php echo $row ["Alamat"] ?></td>
                        </tr>
                        <?php
                        $no++;
                        };
                        ?>
                    </tbody>
                </table>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        </div>



        
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/PetaKecamatan_0.js"></script>
        <script src="data/Jalan_1.js"></script>
        <script src="data/Titik_Sebaran_SPBU_2.php"></script>
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
                color: 'rgba(145,145,145,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,237,238,1.0)',
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
        function pop_Jalan_1(feature, layer) {
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

        function style_Jalan_1_0(feature) {
            switch(String(feature.properties['REMARK'])) {
                case 'Jalan Arteri':
                    return {
                pane: 'pane_Jalan_1',
                opacity: 1,
                color: 'rgba(255,242,175,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor':
                    return {
                pane: 'pane_Jalan_1',
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_Jalan_1',
                opacity: 1,
                color: 'rgba(255,255,253,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
                    break;
            }
        }
        map.createPane('pane_Jalan_1');
        map.getPane('pane_Jalan_1').style.zIndex = 401;
        map.getPane('pane_Jalan_1').style['mix-blend-mode'] = 'normal';
        var layer_Jalan_1 = new L.geoJson(json_Jalan_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_Jalan_1',
            onEachFeature: pop_Jalan_1,
            style: style_Jalan_1_0,
        });
        bounds_group.addLayer(layer_Jalan_1);
        map.addLayer(layer_Jalan_1);
        function pop_Titik_Sebaran_SPBU_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Id</th>\
                        <td>' + (feature.properties['Id'] !== null ? Autolinker.link(String(feature.properties['Id'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kategori</th>\
                        <td>' + (feature.properties['Kategori'] !== null ? Autolinker.link(String(feature.properties['Kategori'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama</th>\
                        <td>' + (feature.properties['Nama'] !== null ? Autolinker.link(String(feature.properties['Nama'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Lattitude</th>\
                        <td>' + (feature.properties['Lattitude'] !== null ? Autolinker.link(String(feature.properties['Lattitude'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Longitude</th>\
                        <td>' + (feature.properties['Longitude'] !== null ? Autolinker.link(String(feature.properties['Longitude'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }


        var myicon_spbu=L.icon({
			iconUrl : 'legend/spbu.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});
		
		var myicon_pommini=L.icon({
			iconUrl : 'legend/pommini.png',
			iconSize : [15,22],
			iconAnchor : [0,30],
			popupAnchor : [0, -10]
		
		});


        function style_Titik_Sebaran_SPBU_2_0(feature) {
            switch(String(feature.properties['Kategori'])) {
                case 'POM-MINI':
                    return {
                pane: 'pane_Titik_Sebaran_SPBU_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(144,185,236,1.0)',
                icon:myicon_pommini,
            }
                    break;
                case 'SPBU':
                    return {
                pane: 'pane_Titik_Sebaran_SPBU_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                icon:myicon_spbu,
            }
                    break;
            }
        }
        map.createPane('pane_Titik_Sebaran_SPBU_2');
        map.getPane('pane_Titik_Sebaran_SPBU_2').style.zIndex = 402;
        map.getPane('pane_Titik_Sebaran_SPBU_2').style['mix-blend-mode'] = 'normal';
        var layer_Titik_Sebaran_SPBU_2 = new L.geoJson(json_Titik_Sebaran_SPBU_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_Titik_Sebaran_SPBU_2',
            onEachFeature: pop_Titik_Sebaran_SPBU_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Titik_Sebaran_SPBU_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_Titik_Sebaran_SPBU_2);
        map.addLayer(layer_Titik_Sebaran_SPBU_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'Titik_Sebaran_SPBU<br /><table><tr><td style="text-align: center;"><img src="legend/pommini.png" width="20px"/></td><td>POM-MINI</td></tr><tr><td style="text-align: center;"><img src="legend/spbu.png"  width="20px"/></td><td>SPBU</td></tr></table>': layer_Titik_Sebaran_SPBU_2,'Jalan<br /><table><tr><td style="text-align: center;"><img src="legend/Jalan_1_JalanArteri0.png" /></td><td>Jalan Arteri</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_1_JalanKolektor1.png" /></td><td>Jalan Kolektor</td></tr><tr><td style="text-align: center;"><img src="legend/Jalan_1_JalanLokal2.png" /></td><td>Jalan Lokal</td></tr></table>': layer_Jalan_1,'<img src="legend/PetaKecamatan_0.png" /> Peta Kecamatan': layer_PetaKecamatan_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_PetaKecamatan_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Nama_Kec'] !== null?String('<div style="color: #147fa6; font-size: 9pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Nama_Kec']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_PetaKecamatan_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_Titik_Sebaran_SPBU_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            
        });
        resetLabels([layer_PetaKecamatan_0,layer_TitikSebaranSPBU_2]);
        map.on("zoomend", function(){
            resetLabels([layer_PetaKecamatan_0,layer_TitikSebaranSPBU_2]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_PetaKecamatan_0,layer_TitikSebaranSPBU_2]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_PetaKecamatan_0,layer_TitikSebaranSPBU_2]);
        });
        </script>
    </body>
</html>
