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
                                <li class="breadcrumb-item active" aria-current="page">Markers</li>
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

<!-- MARKERS LEAFLET -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    const map = L.map('map').setView([8.233122576948993, 124.25883042635034], 14);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var iconMarker = L.icon({
        iconUrl:'{{ asset('iconMarkers/marker.png') }}',
        iconSize:[50,50],
        shadowSize:[50,50],

    })
    var marker = L.marker([8.233122576948993, 124.25883042635034],{
        icon:iconMarker, 
        draggable:true
    })
    .bindPopup('Iligan City')
    .addTo(map);

    var iconMarker = L.icon({
        iconUrl:'{{ asset('iconMarkers/marker.png') }}',
        iconSize:[50,50],
        shadowSize:[50,50],

    })
    var marker2 = L.marker([8.23996293837243, 124.2449068970951],{
        icon:iconMarker, 
        draggable:true
    })
    .bindPopup('MSU-IIT')
    .addTo(map);
    
</script>
@endsection