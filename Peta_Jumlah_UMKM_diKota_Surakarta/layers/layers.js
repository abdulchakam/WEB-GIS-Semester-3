var wms_layers = [];
var format_PetaJumlahUMKMdiKotaSurakarta_0 = new ol.format.GeoJSON();
var features_PetaJumlahUMKMdiKotaSurakarta_0 = format_PetaJumlahUMKMdiKotaSurakarta_0.readFeatures(json_PetaJumlahUMKMdiKotaSurakarta_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PetaJumlahUMKMdiKotaSurakarta_0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_PetaJumlahUMKMdiKotaSurakarta_0.addFeatures(features_PetaJumlahUMKMdiKotaSurakarta_0);var lyr_PetaJumlahUMKMdiKotaSurakarta_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PetaJumlahUMKMdiKotaSurakarta_0, 
                style: style_PetaJumlahUMKMdiKotaSurakarta_0,
    title: 'Peta Jumlah UMKM di Kota Surakarta<br />\
    <img src="styles/legend/PetaJumlahUMKMdiKotaSurakarta_0_0.png" />  4800 - 7510 <br />\
    <img src="styles/legend/PetaJumlahUMKMdiKotaSurakarta_0_1.png" />  7510 - 8782 <br />\
    <img src="styles/legend/PetaJumlahUMKMdiKotaSurakarta_0_2.png" />  8782- 9580 <br />\
    <img src="styles/legend/PetaJumlahUMKMdiKotaSurakarta_0_3.png" />  9580 - 10199 <br />\
    <img src="styles/legend/PetaJumlahUMKMdiKotaSurakarta_0_4.png" />  10199 - 10400 <br />'
        });

lyr_PetaJumlahUMKMdiKotaSurakarta_0.setVisible(true);
var layersList = [lyr_PetaJumlahUMKMdiKotaSurakarta_0];
lyr_PetaJumlahUMKMdiKotaSurakarta_0.set('fieldAliases', {'Provinsi': 'Provinsi', 'Nama_Kota': 'Nama_Kota', 'Nama_Kec': 'Nama_Kec', 'Kode_Kec': 'Kode_Kec', 'data_Jml': 'data_Jml', });
lyr_PetaJumlahUMKMdiKotaSurakarta_0.set('fieldImages', {'Provinsi': 'TextEdit', 'Nama_Kota': 'TextEdit', 'Nama_Kec': 'TextEdit', 'Kode_Kec': 'TextEdit', 'data_Jml': 'TextEdit', });
lyr_PetaJumlahUMKMdiKotaSurakarta_0.set('fieldLabels', {'Provinsi': 'inline label', 'Nama_Kota': 'inline label', 'Nama_Kec': 'inline label', 'Kode_Kec': 'inline label', 'data_Jml': 'inline label', });
lyr_PetaJumlahUMKMdiKotaSurakarta_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});