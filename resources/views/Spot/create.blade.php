@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('all.jobs') }}">Branches</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Get Branch Coordinates</li>
                            </ol>
                        </nav>
                    </h6>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><strong>Find Branch in Map</strong></div>
                                    <div class="card-body">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><strong>Branch Details</strong></div>
                                    <div class="card-body">
                                        <form action="{{ route('spot.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                            <div class="form-group">
                                                <label for=""> <strong>Branch Name</strong> </label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }} </div>
                                                @enderror
                                            </div><br>
                                                <label for=""> <strong>Branch Coordinates</strong> </label>
                                                <input type="text" class="form-control @error('coordinate') is-invalid @enderror" name="coordinate">
                                                @error('coordinate')
                                                <div class="invalid-feedback">{{ $message }} </div>
                                                @enderror
                                            </div><br>
                                            <div class="form-group">
                                                <label for=""> <strong>Area</strong> </label>
                                                <input type="number" class="form-control @error('area') is-invalid @enderror" name="area" step="1" value="1">
                                                @error('area')
                                                <div class="invalid-feedback">{{ $message }} </div>
                                                @enderror
                                            </div><br>
                                            <div class="form-group">
                                                <label for=""> <strong>Upload Branch Image</strong></label>
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                                @error('image')
                                                <div class="invalid-feedback">{{ $message }} </div>
                                                @enderror
                                            </div><br>
                                            <div class="form-group">
                                                <label for=""> <strong>Branch Description</strong> </label>
                                                <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror" cols="30" rows="7"></textarea>
                                            </div><br>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }} </div>
                                            @enderror
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-primary btn-sm my-2"> Add Branch </button>
                                                <a href="{{ route('spot.index') }}" class="btn btn-danger btn-sm my-2">Back</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </dv>

        <!-- ALL BRANCHES LEAFLET -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script>
            // const map = L.map('map').setView([8.233122576948993, 124.25883042635034], 14);
            var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            });

            var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.{ext}', {
                minZoom: 0,
                maxZoom: 20,
                attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                ext: 'png'
            });

            var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                maxZoom: 17,
                attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
            });

            var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
            });

            var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
                maxZoom: 16
            });

            var map = L.map('map', {
                center: [8.230756413110184,124.24715297978099],
                zoom: 10,
                layers: [osm]
            }) 

            var marker = L.marker([8.230756413110184,124.24715297978099], {
                    draggable: true
                })
                .addTo(map);

            var baseLayers = {
                'Open Street Map': osm,
                'Stadia Alidade Smooth Dark': Stadia_AlidadeSmoothDark,
                'Open Topo Map': OpenTopoMap,
                'Esri World Imagery': Esri_WorldImagery,
                'Esri NatGeo World Map': Esri_NatGeoWorldMap,
            }

            L.control.layers(baseLayers).addTo(map)

            function onMapClick(e) {
                var coords = document.querySelector("[name=coordinate]")
                var latitude = document.querySelector("[name=latitude]")
                var longitude = document.querySelector("[name=longitude]")
                var lat = e.latlng.lat
                var lng = e.latlng.lng

                if (!marker) {
                    marker = L.marker(e.latlng).addTo(map)
                } else {
                    marker.setLatLng(e.latlng)
                }

                coords.value = lat + "," + lng
                latitude.value = lat,
                longitude.value = lng
            }
            map.on('click', onMapClick)

            marker.on('dragend', function (e) {
                var coordinate = e.target.getLatLng();
                marker.setLatLng(coordinate, {
                    draggable: true
                });
                var coords = document.querySelector("[name=coordinate]");
                var latitude = document.querySelector("[name=latitude]");
                var longitude = document.querySelector("[name=longitude]");

                coords.value = coordinate.lat + "," + coordinate.lng;
                latitude.value = coordinate.lat;
                longitude.value = coordinate.lng;
            });
        </script>

        @endsection