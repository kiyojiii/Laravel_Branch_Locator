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
                                <li class="breadcrumb-item active" aria-current="page">Polygons</li>
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
    const map = L.map('map').setView([8.23975916954117, 124.25246419781898], 14);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const polygon = L.polygon([
        [8.236870599326586, 124.2172848808517],
        [8.273869144388621, 124.2478733780694],
        [8.252006786683575, 124.28234612890205],
        [8.206115929013336, 124.25030103657875],
    ]).addTo(map).bindPopup('Iligan City');
</script>
@endsection