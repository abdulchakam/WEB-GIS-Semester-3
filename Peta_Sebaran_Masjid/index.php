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
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
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
        <script src="data/ADM_KEC_KOTA_SEMARANG_250K_0.js"></script>
        <script src="data/ADM_DESA_KOTA_SEMARANG_250K_1.js"></script>
        <script src="data/Masjid.php"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.1227093464,110.211189326],[-6.93050470532,110.525177412]]);
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
        }
        function pop_ADM_KEC_KOTA_SEMARANG_250K_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">PROVINSI</th>\
                        <td>' + (feature.properties['PROVINSI'] !== null ? Autolinker.link(String(feature.properties['PROVINSI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KABUPATEN</th>\
                        <td>' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KECAMATAN</th>\
                        <td>' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KODE_DAGRI</th>\
                        <td>' + (feature.properties['KODE_DAGRI'] !== null ? Autolinker.link(String(feature.properties['KODE_DAGRI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">jml</th>\
                        <td>' + (feature.properties['jml'] !== null ? Autolinker.link(String(feature.properties['jml'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADM_KEC_KOTA_SEMARANG_250K_0_0() {
            return {
                pane: 'pane_ADM_KEC_KOTA_SEMARANG_250K_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(101,211,167,1.0)',
            }
        }
        map.createPane('pane_ADM_KEC_KOTA_SEMARANG_250K_0');
        map.getPane('pane_ADM_KEC_KOTA_SEMARANG_250K_0').style.zIndex = 400;
        map.getPane('pane_ADM_KEC_KOTA_SEMARANG_250K_0').style['mix-blend-mode'] = 'normal';
        var layer_ADM_KEC_KOTA_SEMARANG_250K_0 = new L.geoJson(json_ADM_KEC_KOTA_SEMARANG_250K_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_ADM_KEC_KOTA_SEMARANG_250K_0',
            onEachFeature: pop_ADM_KEC_KOTA_SEMARANG_250K_0,
            style: style_ADM_KEC_KOTA_SEMARANG_250K_0_0,
        });
        bounds_group.addLayer(layer_ADM_KEC_KOTA_SEMARANG_250K_0);
        map.addLayer(layer_ADM_KEC_KOTA_SEMARANG_250K_0);
        function pop_ADM_DESA_KOTA_SEMARANG_250K_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PROVINSI</th>\
                        <td>' + (feature.properties['PROVINSI'] !== null ? Autolinker.link(String(feature.properties['PROVINSI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KABUPATEN</th>\
                        <td>' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KECAMATAN</th>\
                        <td>' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">DESA</th>\
                        <td>' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KODE_DAGRI</th>\
                        <td>' + (feature.properties['KODE_DAGRI'] !== null ? Autolinker.link(String(feature.properties['KODE_DAGRI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Shape_Leng</th>\
                        <td>' + (feature.properties['Shape_Leng'] !== null ? Autolinker.link(String(feature.properties['Shape_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Shape_Area</th>\
                        <td>' + (feature.properties['Shape_Area'] !== null ? Autolinker.link(String(feature.properties['Shape_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KEC_PILIH</th>\
                        <td>' + (feature.properties['KEC_PILIH'] !== null ? Autolinker.link(String(feature.properties['KEC_PILIH'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NEGARA</th>\
                        <td>' + (feature.properties['NEGARA'] !== null ? Autolinker.link(String(feature.properties['NEGARA'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADM_DESA_KOTA_SEMARANG_250K_1_0() {
            return {
                pane: 'pane_ADM_DESA_KOTA_SEMARANG_250K_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(110,226,164,1.0)',
            }
        }
        map.createPane('pane_ADM_DESA_KOTA_SEMARANG_250K_1');
        map.getPane('pane_ADM_DESA_KOTA_SEMARANG_250K_1').style.zIndex = 401;
        map.getPane('pane_ADM_DESA_KOTA_SEMARANG_250K_1').style['mix-blend-mode'] = 'normal';
        var layer_ADM_DESA_KOTA_SEMARANG_250K_1 = new L.geoJson(json_ADM_DESA_KOTA_SEMARANG_250K_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_ADM_DESA_KOTA_SEMARANG_250K_1',
            onEachFeature: pop_ADM_DESA_KOTA_SEMARANG_250K_1,
            style: style_ADM_DESA_KOTA_SEMARANG_250K_1_0,
        });
        bounds_group.addLayer(layer_ADM_DESA_KOTA_SEMARANG_250K_1);
        map.addLayer(layer_ADM_DESA_KOTA_SEMARANG_250K_1);
        function pop_Masjid_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? Autolinker.link(String(feature.properties['id'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Nama</strong><br />' + (feature.properties['Nama'] !== null ? Autolinker.link(String(feature.properties['Nama'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Masjid_2_0() {
            return {
                pane: 'pane_Masjid_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,228,117,1.0)',
            }
        }
        map.createPane('pane_Masjid_2');
        map.getPane('pane_Masjid_2').style.zIndex = 402;
        map.getPane('pane_Masjid_2').style['mix-blend-mode'] = 'normal';
        var layer_Masjid_2 = new L.geoJson(json_Masjid_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_Masjid_2',
            onEachFeature: pop_Masjid_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Masjid_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_Masjid_2);
        map.addLayer(layer_Masjid_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/Masjid_2.png" /> Masjid': layer_Masjid_2,'<img src="legend/ADM_DESA_KOTA_SEMARANG_250K_1.png" /> ADM_DESA_KOTA_SEMARANG_250K': layer_ADM_DESA_KOTA_SEMARANG_250K_1,'<img src="legend/ADM_KEC_KOTA_SEMARANG_250K_0.png" /> ADM_KEC_KOTA_SEMARANG_250K': layer_ADM_KEC_KOTA_SEMARANG_250K_0,},{collapsed:false}).addTo(map);
        setBounds();
        </script>
    </body>
</html>
