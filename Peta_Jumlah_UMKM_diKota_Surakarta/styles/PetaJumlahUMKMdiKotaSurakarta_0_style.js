var size = 0;
var placement = 'point';

var style_PetaJumlahUMKMdiKotaSurakarta_0 = function (feature, resolution) {
    var context = {
        feature: feature,
        variables: {}
    };
    var value = feature.get("data_Jml");
    var labelText = "";
    size = 0;
    var labelFont = "12.025px \'Montserrat SemiBold\', sans-serif";
    var labelFill = "rgba(0, 0, 0, 1)";
    var textAlign = "left";
    var offsetX = 8;
    var offsetY = 3;
    var placement = 'point';
    if (feature.get("Nama_Kec") !== null) {
        labelText = String(feature.get("Nama_Kec"));
    }
    if (value > 4800.000000 && value <= 7510.000000) {
        style = [new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'rgba(0,0,0,1.0)',
                lineDash: null,
                lineCap: 'butt',
                lineJoin: 'miter',
                width: 0
            }),
            fill: new ol.style.Fill({
                color: 'rgba(247,251,255,1.0)'
            }),
            text: createTextStyle(feature, resolution, labelText, labelFont,
                labelFill, placement)
        })]
    } else if (value > 7510.000000 && value <= 8782.000000) {
        style = [new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'rgba(0,0,0,1.0)',
                lineDash: null,
                lineCap: 'butt',
                lineJoin: 'miter',
                width: 0
            }),
            fill: new ol.style.Fill({
                color: 'rgba(200,221,240,1.0)'
            }),
            text: createTextStyle(feature, resolution, labelText, labelFont,
                labelFill, placement)
        })]
    } else if (value > 8782.000000 && value <= 9580.000000) {
        style = [new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'rgba(0,0,0,1.0)',
                lineDash: null,
                lineCap: 'butt',
                lineJoin: 'miter',
                width: 0
            }),
            fill: new ol.style.Fill({
                color: 'rgba(115,179,216,1.0)'
            }),
            text: createTextStyle(feature, resolution, labelText, labelFont,
                labelFill, placement)
        })]
    } else if (value > 9580.000000 && value <= 10199.000000) {
        style = [new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'rgba(0,0,0,1.0)',
                lineDash: null,
                lineCap: 'butt',
                lineJoin: 'miter',
                width: 0
            }),
            fill: new ol.style.Fill({
                color: 'rgba(40,121,185,1.0)'
            }),
            text: createTextStyle(feature, resolution, labelText, labelFont,
                labelFill, placement)
        })]
    } else if (value > 10199.000000 && value <= 10400.000000) {
        style = [new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'rgba(0,0,0,1.0)',
                lineDash: null,
                lineCap: 'butt',
                lineJoin: 'miter',
                width: 0
            }),
            fill: new ol.style.Fill({
                color: 'rgba(8,48,107,1.0)'
            }),
            text: createTextStyle(feature, resolution, labelText, labelFont,
                labelFill, placement)
        })]
    };

    return style;
};