@extends('layouts.template')

@section('styles')
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
@endsection



@section('content')
    <div id="map" style="width: 100vw; height: 100vh; margin: 0"></div>

    
@endsection



@section('script')
   
    <script>
        // Map
        var map = L.map('map').setView([-7.715, 110.355], 11); // Koordinat dan tingkat zoom yang disesuaikan untuk wilayah Sleman
        /* Tile Basemap */
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);

        var basemap1 = L.tileLayer(
            "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIGUGM" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap2 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}", {
                attribution: 'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap3 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}", {
                attribution: 'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap4 = L.tileLayer(
            "https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png", {
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            }
        );

        basemap4.addTo(map);

        var baseMaps = {
            OpenStreetMap: basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4,
        };

        L.control.layers(baseMaps).addTo(map);
        /* Scale Bar */
        L.control
            .scale({
                maxWidth: 150,
                position: "bottomright",
            })
            .addTo(map);
            
// Load GeoJSON
fetch('storage/geojson/Admin_Sleman.geojson')
    .then(response => response.json())
    .then(data => {
        // Buat layer GeoJSON
        geoJsonLayer = L.geoJSON(data, {
            style: function(feature) {
                // Mendapatkan warna acak
                var randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
                return { fillColor: randomColor, color: 'black', weight: 0.2, fillOpacity: 0.7 };
            },
            onEachFeature: function(feature, layer) {
                var content = "Kecamatan: " + feature.properties.KECAMATAN;
                layer.on({
                    click: function(e) {
                        // Fungsi ketika objek diklik
                        layer.bindPopup(content).openPopup();
                    }
                });
            }
        });

        // Tambahkan layer ke kontrol lapisan
        var overlayMaps = {
            "<i class='fas fa-map-marker-alt'></i> Titik Wisata": point,
            "<i class='fas fa-road'></i> Jalan": polyline,
            "<i class='fas fa-draw-polygon'></i> Batas Administrasi": geoJsonLayer
        };
        L.control.layers(null, overlayMaps, { collapsed: false }).addTo(map);

        // Tambahkan layer ke peta
        geoJsonLayer.addTo(map);
    });
        
/* GeoJSON Point */
var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<div class='container'>" +
                   "<p>Nama: " + feature.properties.name + "</p>" +
                   "<p>Deskripsi: " + feature.properties.description + "</p>" +
                   "<p>Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image + "' class='img-thumbnail' alt='...' style='max-width: 200px;'></p>" +
                   "<div class='d-flex flex-row mt-3'>" ;

                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });

        // Mendefinisikan style berdasarkan REMARK
        function getStyle(feature) {
            switch (feature.properties.REMARK) {
                case 'jalan kolektor':
                    return {
                        color: "#B22222", weight: 3
                    };
                case 'jalan lain':
                    return {
                        color: "#B22222", weight: 2
                    };
                case 'jalan lokal':
                    return {
                        color: "#B22222", weight: 1
                    };
                case 'jalan setapak':
                    return {
                        color: "#B22222", weight: 0.5
                    };
                default:
                    return {
                        color: "#B22222", weight: 1
                    };
            }
        }

        // Membuat layer GeoJSON dengan style dan popup
        var polyline = L.geoJson(null, {
            style: getStyle,
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama: " + feature.properties.REMARK + "<br>" +
                    "Deskripsi: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail' alt='...'>" + "<br>" ;
                layer.bindPopup(popupContent);
                layer.on({
                    mouseover: function(e) {
                        layer.bindTooltip(feature.properties.REMARK).openTooltip();
                    }
                });
            }
        });

        // Mengambil data GeoJSON dari URL dan menambahkannya ke peta
        fetch('{{ asset('storage/geojson/Jalan.geojson') }}')
            .then(response => response.json())
            .then(data => {
                polyline.addData(data);
                map.addLayer(polyline);
            })
            .catch(error => console.log(error));

        /* GeoJSON polygon */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama: " + feature.properties.name + "<br>" +
                    "Deskripsi: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image + "'class='img-thumbnail' alt='...'>"
                    ;
                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        // //layer control
        // var overlayMaps = {
        //     "Point": point,
        //     "Polyline": polyline,
        //     "Polygon": polygon
        // };

        // var layerControl = L.control.layers(null, overlayMaps, {collapsed: false}).addTo(map);

    </script>
@endsection