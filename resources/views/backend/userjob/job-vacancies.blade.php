<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WhiteSands - Job Vacancy</title>
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
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/owlcarousel/assets/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/style.css') }}">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
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
                        <a href="{{ route('job-vacancies') }}" class="nav-item nav-link active">Job Vacancies</a>
                        <a href="{{ route('branch-location') }}" class="nav-item nav-link">Branch Locator</a>
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
                            <li><a class="dropdown-item" href="{{ route('user.user_profile') }}">Profile</a></li>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Job Vacancies</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active"><a href="{{ route('job-vacancies') }}">Job Vacancies</a></li>
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
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('backend/assets2/img/1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('backend/assets2/img/2.png') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('backend/assets2/img/3.png') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('backend/assets2/img/4.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Job Vacancies</h5>
                        <h1 class="mb-4">Welcome to Job Vacancies</h1>
                        <p class="mb-4">Our job vacancies portal is your gateway to exciting career opportunities in cooperative organizations. We believe in the power of cooperation and community-driven initiatives, and that's why we offer a diverse range of job openings for individuals who are passionate about making a positive impact on the world.</p>
                        <p class="mb-4">At Job Vacancies, we connect talented professionals with cooperative businesses, credit unions, and organizations that share a common vision of working together for a better future. Whether you're an experienced cooperative enthusiast or just starting your career, you'll find a wealth of opportunities here to grow, learn, and contribute to the cooperative movement.</p>
                        <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                @php
                                $openJobsCount = \App\Models\JobVacancy::where('status', 'Open')->count();
                                @endphp
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $openJobsCount }}</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Available</p>
                                    <h6 class="text-uppercase mb-0">Vacant Jobs</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
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
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2 btn-sm" href="{{ route('apply.job') }}">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Two Tables -->
        <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Open Job Listing</h6>
                <p class="text-muted mb-3"> <span style="color: green; font-weight: bold;">Available Jobs</span></p>
                <div class="table-responsive">
                <table class="table table-hover" id="openJobListTable">
                    <thead>
                        <tr>
                            <th class="text-center">Slot(s)</th>
                            <th class="text-center">Position</th>
                            <!-- <th>Department</th> -->
                            <th class="text-center">Branch</th>
                            <!-- <th>Status</th> -->
                            <th class="text-center">Date Posted</th>
                            <th class="text-center"> Apply Now </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $key => $data)
                        @if($data->status === 'Open')
                        <tr>
                            <td class="text-center">{{ $data->slots }}</td>
                            <td class="text-center">{{ $data->position }}</td>
                            <!-- <td>{{ $data->department }}</td> -->
                            <td class="text-center">{{ $data->branchloc }}</td>
                            <!-- <td>{{ $data->status }}</td> -->
                            <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('apply.job') }}" class="btn btn-primary btn-sm">Apply</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Recent Opened Jobs</h6>
                <p class="text-muted mb-3"> <span style="color: green; font-weight: bold;">Recent Opened Jobs These Past 30 Days</span></p>
                <div class="table-responsive">
                    <table class="table table-hover" id="closedJobListTable">
                    <thead>
                            <tr>
                                <th class="text-center">Slot(s)</th>
                                <th class="text-center">Position</th>
                                <!-- <th>Department</th> -->
                                <th class="text-center">Branch</th>
                                <!-- <th>Status</th> -->
                                <th class="text-center">Date Posted</th>
                                <th class="text-center"> Apply Now </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $key => $data)
                            @if($data->status === 'Open' && \Carbon\Carbon::parse($data->created_at)->diffInDays(\Carbon\Carbon::now()) <= 15)
                                <tr>
                                    <td class="text-center">{{ $data->slots }}</td>
                                    <td class="text-center">{{ $data->position }}</td>
                                    <!-- <td>{{ $data->department }}</td> -->
                                    <td class="text-center">{{ $data->branchloc }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('apply.job') }}" class="btn btn-primary btn-sm">Apply</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Two Tables End -->
        
    <br><br><br>
        <!-- All Job Table Start -->
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <nav class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">All Job Listings</li>
                            </ol>
                        </nav> 
                    </h6>
                    <div class="table-responsive">
                       <table id="AllJobListTable" class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Slots</th>
            <th class="text-center">Position</th>
            <th class="text-center">Department</th>
            <th class="text-center">Branch</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date Posted</th>
            <th class="text-center"> Apply Now </th>
        </tr>
    </thead>
    <tbody>
        @php
            $jobs = $jobs->sortBy('id'); // Sort jobs by 'id' in descending order
            $rowNumber = 1;
        @endphp
        @foreach($jobs as $key => $data)
        <tr>
            <td class="text-center">{{ $rowNumber++ }}</td>
            <td class="text-center">{{ $data->slots }}</td>
            <td class="text-center">{{ $data->position }}</td>
            <td class="text-center">{{ $data->department }}</td>
            <td class="text-center">{{ $data->branchloc }}</td>                 
            <td class="text-center" style="position: relative;">
                <span style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: {{ $data->status === 'Open' ? 'green' : 'red' }}; margin-right: 8px;"></span>
                {{ $data->status }}
            </td>
            <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
            <td class="text-center">
                <a href="{{ route('apply.job') }}" class="btn btn-primary btn-sm">Apply</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- All Job Table End -->

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
            $('#openJobListTable').DataTable
            ({
                "lengthMenu": [6, 10, 25, 50], 
                "pageLength": 6, 
            });
            $('#closedJobListTable').DataTable
            ({
                "lengthMenu": [6, 10, 25, 50], 
                "pageLength": 6, 
            });
            $('#AllJobListTable').DataTable
            ({
                order: [[0, "desc"]],
                "lengthMenu": [8, 10, 25, 50], 
                "pageLength": 8, 
            });
        });
    </script>
</body>

