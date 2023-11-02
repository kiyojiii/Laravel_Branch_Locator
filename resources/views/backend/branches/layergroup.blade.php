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
                                <li class="breadcrumb-item active" aria-current="page">Layer Group</li>
                            </ol>
                        </nav>
                    </h6>
                    <div id="map"></div>
                    <!-- OLD MAP <div id="map" style="height: 500px; width: 100%;"></div> -->

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

    const schools = L.layerGroup();

    var map = L.map('map', {
        center: [8.233122576948993, 124.25883042635034],
        zoom: 15,
        layers: [osm, schools]
    })

    var marker = L.marker([8.240837750240418, 124.24470348102209])
        .bindPopup('MSU-IIT')
        .addTo(schools);

    var marker2 = L.marker([8.244258866797738, 124.25713379851055])
        .bindPopup('Tambo Central School')
        .addTo(schools);

    const baseLayers = {
        'Open Street Map': osm,
        'Stadia Alidade Smooth Dark': Stadia_AlidadeSmoothDark,
        'Open Topo Map': OpenTopoMap,
        'Esri World Imagery': Esri_WorldImagery,
        'Esri NatGeo World Map': Esri_NatGeoWorldMap,
    }

    const overLayers = {
        'Schools': schools
    }

    const layerControl = L.control.layers(baseLayers, overLayers).addTo(map)
    
</script>

@endsection