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
                                <li class="breadcrumb-item active" aria-current="page">Circles</li>
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

	const circle = L.circle([8.240380745013788, 124.24060643713233], {
		color: 'black',
		fillColor: 'red',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map).bindPopup('Tibanga');
    
    const circle2 = L.circle([8.229112867364254, 124.25409126745924], {
		color: 'black',
		fillColor: 'green',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map).bindPopup('Pala-o');
</script>
@endsection
