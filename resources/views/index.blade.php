@extends('layouts.template')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
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

    <!-- Modal Create Point -->
    <div class="modal fade" id="PointModal" tabindex="-1" aria-labelledby="PointModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="PointModalLabel">Create Point</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                     <form action="{{ route('point-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                    </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="geom" class="form-label">Geomerty</label>
                        <textarea class="form-control" id="geom_point" name="geom" rows="1" readonly></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_point" 
                        name="image" 
                        onchange="document.getElementById ('preview-image-point').src = window.URL.createObjectURL
                        (this.files[0]) ">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-point"
                            class="img-thumbnail" width="200">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create Polyline -->
    <div class="modal fade" id="PolylineModal" tabindex="-1" aria-labelledby="PolylineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="PolylineModalLabel">Create Polyline</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="{{ route('polyline-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                    </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="geom" class="form-label">Geomerty</label>
                        <textarea class="form-control" id="geom_polyline" name="geom" rows="1" readonly></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_polyline" name="image"
                        onchange="document.getElementById ('preview-image-polyline').src = window.URL.createObjectURL
                        (this.files[0]) ">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-polyline"
                            class="img-thumbnail" width="200">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create Polygon -->
    <div class="modal fade" id="PolygonModal" tabindex="-1" aria-labelledby="PolygonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="PolygonModalLabel">Create Polygon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="{{ route('polygon-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Fill polygon name">
                    </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="geom" class="form-label">Geomerty</label>
                        <textarea class="form-control" id="geom_polygon" name="geom" rows="1" readonly></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_polygon" name="image"
                        onchange="document.getElementById ('preview-image-polygon').src = window.URL.createObjectURL
                        (this.files[0]) ">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-polygon"
                            class="img-thumbnail" width="200">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
    <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
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
            
            // Deklarasikan variabel untuk menyimpan layer
// Deklarasikan variabel untuk menyimpan layer
var geoJsonLayer;

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

        /* Digitize Function */
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        var drawControl = new L.Control.Draw({
            draw: {
                position: 'topleft',
                polyline: true,
                polygon: true,
                rectangle: true,
                circle: false,
                marker: true,
                circlemarker: false
            },
            edit: false
        });

        map.addControl(drawControl);

        map.on('draw:created', function(e) {
    var type = e.layerType,
        layer = e.layer;

    console.log(type);

    var drawnJSONObject = layer.toGeoJSON();
    var objectGeometry = Terraformer.WKT.convert(drawnJSONObject.geometry);

    console.log(drawnJSONObject);
    console.log(objectGeometry);

    if (type === 'polyline') {
        // Set value geometry to input geom
        $("#geom_polyline").val(objectGeometry);
        //show modal
        $("#PolylineModal").modal('show');

    } else if (type === 'polygon' || type === 'rectangle') {
        // Set value geometry to input geom
        $("#geom_polygon").val(objectGeometry);
        //show modal
        $("#PolygonModal").modal('show');

    } else if (type === 'marker') {
        $("#geom_point").val(objectGeometry);
        $("#PointModal").modal('show');
    } else {
        console.log('undefined');
    }

    drawnItems.addLayer(layer);
});

 /* GeoJSON Point */
 var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<div class='container'>" +
                   "<p>Nama: " + feature.properties.name + "</p>" +
                   "<p>Deskripsi: " + feature.properties.description + "</p>" +
                   "<p>Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image + "' class='img-thumbnail' alt='...' style='max-width: 200px;'></p>" +
                   "<div class='d-flex flex-row mt-3'>" + 
                   "<a href='{{ url('edit-point') }}/" + feature.properties.id + "' class='btn btn-warning me-2'><i class='fa-solid fa-pen-to-square'></i></a>" + 
                   "<form action='{{ url('delete-point') }}/" + feature.properties.id + "' method='POST'>" +
                   '{{ csrf_field() }}' +
                   '{{ method_field('DELETE') }}' +
                   "<button type='submit' class='btn btn-danger' onclick='return confirm(`Hapus kah?`)'><i class='fa-solid fa-trash-can'></i></button>" + 
                   "</form>" + 
                   "</div>" +
                   "</div>";

                    

                    ;

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
                    "' class='img-thumbnail' alt='...'>" + "<br>" +
                    "<div class='d-flex flex-row mt-3'>" +
                    "<a href='{{ url('edit-polyline') }}/" + feature.properties.id +
                    "' class='btn btn-warning me-2'><i class='fa-solid fa-pen-to-square'></i></a>" +
                    "<form action='{{ url('delete-polyline') }}/" + feature.properties.id +
                    "' method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-danger' onclick='return confirm(\"Yakin Anda akan menghapus data ini?\")'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +
                    "</div>";
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
                    + "<br>" + 

                    "<div class='d-flex flex-row mt-3'>" + 
                    "<a href='{{ url('edit-polygon') }}/" + feature.properties.id +
                    "' class='btn btn-warning me-2'><i class='fa-solid fa-pen-to-square'></i></a>" +

                    "<form action='{{ url('delete-polygon') }}/" + feature.properties.id + "' method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +

                    "<button type='submit' class='btn btn-danger' onclick='return confirm(`Hapus kah?`)'><i class='fa-solid fa-trash-can'></i></button>"
                    
                    "</Form>" + 

                    "</div>"
                    
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
        //     var overlayMaps = {
        //     "<i class='fas fa-map-marker-alt'></i> Titik Wisata": point,
        //     "<i class='fas fa-road'></i> Jalan": polyline,
        //     "<i class='fas fa-draw-polygon'></i> Batas Administrasi": polygon
        // };

        // var layerControl = L.control.layers(null, overlayMaps, {collapsed: false}).addTo(map);

    </script>
@endsection