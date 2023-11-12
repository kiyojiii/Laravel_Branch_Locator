<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WhiteSands - Branch Locator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/334c45a40c.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/style.css') }}">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa-solid fa-location-dot me-3"></i>WhiteSands</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('job-vacancies') }}" class="nav-item nav-link">Job Vacancies</a>
                        <a href="{{ route('branch-location') }}" class="nav-item nav-link active">Branch Locator</a>
                        <!-- <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        <div class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        @else
                        <a href="{{ route('user.login') }}" class="btn btn-primary py-2 px-4">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary py-2 px-4">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Branch Locations</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active"><a href="{{ route('branch-location') }}">Branch Locator</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('backend/assets3/images/dbranch.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('backend/assets3/images/cbranch.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('backend/assets3/images/cmbranch.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('backend/assets3/images/gbranch.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Branch Locator</h5>
                        <h1 class="mb-4">Welcome to Branch Locator</h1>
                        <p class="mb-4">Welcome to our Branch Locator, your guide to discovering our cooperative organization's network of branches. We're dedicated to serving local communities and providing convenient access to our services.</p>
                        <p class="mb-4">Explore our branch locations and find the one nearest to you. Whether you're an existing member or interested in joining us, our branches are here to assist you. Join us today in building a stronger and more inclusive community!</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    @php
                                    $branches = \App\Models\Spot::count();
                                    @endphp
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $branches }}</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Total</p>
                                        <h6 class="text-uppercase mb-0">NMPC Branches</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                @php
                                $totalcount = \App\Models\JobVacancy::count();
                                @endphp
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $totalcount }}</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Total</p>
                                    <h6 class="text-uppercase mb-0">Job Listing</h6>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Map -->
        <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4"> <!-- Adjust the width of the left column as needed -->
            <div class="card">
                <div class="card-header"><strong>Branch List</strong></div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" id="branchlist">
                    <thead>
                        <tr>
                            <th class="text-center">Area</th>
                            <th class="text-center">Branch</th>
                            <th class="text-center">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($branch as $key => $data)
                        <tr>
                            <td class="text-center">{{ $data->area }}</td>
                            <td class="text-center">{{ $data->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('branch-detail',$data->slug) }}" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-8"> <!-- Adjust the width of the right column as needed -->
            <div class="card">
            <div class="card-header"><strong>Branch Locations</strong></div>
                <div class="card-body">
                    <div id="map" style="width: 844px; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tibanga, 9200 Iligan City, Philippines</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> +63 (063) 492 1173</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>whitesands@ws.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Office Hours</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Want to keep updated about our website? Subscribe to our Newsletter.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Whitesands</a>, All Right Reserved 2023.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ url('') }}">Home</a>
                                <a href="{{ route('user.user_profile') }}">Profile</a>
                                <a href="{{ route('job-vacancies') }}">Job Vacancies</a>
                                <a href="{{ route('branch-location') }}">Branch Locator</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend/assets2/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('backend/assets2/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('backend/assets2/js/main.js') }}"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Initialize DataTables for the tables -->
    <script>
        $(document).ready(function() {
            $('#openJobListTable').DataTable({
                "lengthMenu": [8, 10, 25, 50],
                "pageLength": 8,
            });
            $('#closedJobListTable').DataTable({
                "lengthMenu": [8, 10, 25, 50],
                "pageLength": 8,
            });
            $('#AllJobListTable').DataTable({
                order: [
                    [0, "desc"]
                ],
                "lengthMenu": [8, 10, 25, 50],
                "pageLength": 8,
            });
        });
    </script>

    <!-- ALL BRANCHES LEAFLET -->

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin="">
    </script>

    <!-- <script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    </script> -->

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var Stadia_Dark = L.tileLayer(
            'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            });

        var Esri_WorldStreetMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
            });

        var map = L.map('map', {
            center: [{{$centerPoint->coordinates}}],
            zoom: 10,
            layers: [osm],
            fullscreenControl: {
                pseudoFullscreen: false
            }
        })

        const baseLayers = {
            'Openstreetmap': osm,
            'StadiaDark': Stadia_Dark,
            'Esri': Esri_WorldStreetMap
        }

        var datas = [
            @foreach($spot as $key => $value) {
                "loc": [{{$value->coordinates}}],
                "title": '{!! $value->name !!}'
            },
            @endforeach
        ]

        var markersLayer = new L.layerGroup()
        map.addLayer(markersLayer)

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            zoom: 15,
            markerLocation: true
        })

        map.addControl(controlSearch)

        for (i in datas) {
            var title = datas[i].title,
                loc = datas[i].loc,
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                })
            markersLayer.addLayer(marker)

            @foreach($spot as $item)
            L.marker([{{$item->coordinates}}])
                .bindPopup(
                    "<div class='center my-2'><img src='{{ $item->getImageAsset() }}' class='img-fluid' width='700px'></div>" +
                    "<div class='center my-2'><strong>Branch Name: </strong><br>{{ $item->name }}</div>" +
                    "<div class='center'><a href='{{ route('branch-detail',$item->slug) }}' class='btn btn-outline-info'>Branch Details</a></div>"
                )
                .addTo(map)
            @endforeach
        }

        const layerControl = L.control.layers(baseLayers).addTo(map)
    </script>

        <!-- Initialize DataTables for the tables -->
        <script>
        $(document).ready(function() {
            $('#branchlist').DataTable
            ({
                "lengthMenu": [7, 10, 25, 50], 
                "pageLength": 7, 
            });
        });
    </script>

</body>