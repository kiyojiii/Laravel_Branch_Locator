<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MSU-IIT NMPC - Job Vacancy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('backend/assets2/img/NMPCLogo.png') }}" rel="icon">
    <link href="{{ asset('backend/assets2/img/NMPCLogo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('backend/assets4/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets4/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('backend/assets4/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets4/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets4/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets4/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets4/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('backend/assets4/css/style.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <script src="https://kit.fontawesome.com/334c45a40c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Flattern
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('sweetalert::alert')
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">msuiitnmpc@msuiitcoop.org</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(063) 223-5874</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ route('user.user_index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">You are Logged in as {{ Auth::user()->firstname }}</a>
                    @if(auth()->check())
                        @if(auth()->user()->role === 'admin')
                            <a class="" href="{{ route('admin.dashboard') }}">Profile</a>
                        @elseif(auth()->user()->role === 'user')
                            <a class="" href="{{ route('user.user_index') }}">Profile</a>
                        @endif
                    @else
                        <!-- Handle case when the user is not authenticated -->
                        <p>Not authenticated</p>
                    @endif
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('user.login') }}" class="">Log in &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                    @if (Route::has('register'))
                    <a href="{{ route('login') }}" class="">Register &nbsp; <i class="fa-solid fa-user-plus"></i></a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="{{ url('/') }}"><img src="{{ asset('backend/assets2/img/NMPCLogo.png') }}" alt="" class="img-fluid"></a><a href="{{ url('/') }}">MSU-IIT NMPC</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li class="dropdown"><a class="active" href="#"><span>Services</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a class="active" href="{{ route('job-vacancies') }}">Job Vacancy</a></li>
                            <li><a href="{{ route('branch-location') }}">Branch Locator</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <!-- End Hero -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Job Vacancy</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('job-vacancies') }}">Services</a></li>
                        <li><a href="{{ route('job-vacancies') }}">Job Vacancy</a></li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->
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
                        <h1 class="mb-4">Welcome to Job Vacancies</h1>
                        <p class="mb-4" style="text-align: justify;">
                            Our job vacancies portal is your gateway to exciting career opportunities in cooperative organizations. We believe in the power of cooperation and community-driven initiatives, and that's why we offer a diverse range of job openings for individuals who are passionate about making a positive impact on the world.
                        </p>
                        <p class="mb-4" style="text-align: justify;">
                            At Job Vacancies, we connect talented professionals with cooperative businesses, credit unions, and organizations that share a common vision of working together for a better future. Whether you're an experienced cooperative enthusiast or just starting your career, you'll find a wealth of opportunities here to grow, learn, and contribute to the cooperative movement.
                        </p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        @php
                        $usersCount = \App\Models\User::count();
                        @endphp
                        <h3>Join Our Growing Community of <span>{{ $usersCount }}</span> Users!</h3>
                        <p> Experience the strength of unity! Become a member of MSU-IIT NMPC and enjoy the benefits of cooperative living. Together, we build a community focused on mutual support, financial growth, and shared success. Join us on this cooperative journey!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ route('apply.job') }}">Apply Now</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- End Cta Section -->
        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Explore Exciting Job Opportunities</h3>
                            <p data-aos="fade-up" style="text-align: justify;">
                                Join our team and be part of an innovative and dynamic workplace. We are always on the lookout for talented individuals who are passionate about making a difference. Explore the job vacancies below and take the next step in your career with us.
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class='bx bxs-bank'></i>
                                    <h4>Finance</h4>
                                    <p style="text-align: justify;">To ensure the financial viability of the cooperative.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class='bx bxs-group'></i>
                                    <h4>Workforce</h4>
                                    <p style="text-align: justify;">To maintain a highly motivated and competent workforce.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class='bx bxs-business'></i>
                                    <h4>Governance</h4>
                                    <p style="text-align: justify;">To practice high ethical standards, operational efficiency and effectiveness in governance the cooperative.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class='bx bx-building-house'></i>
                                    <h4>Community</h4>
                                    <p style="text-align: justify;">To develop sustainable outreach programs and linkages with other institutions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- Two Tables -->
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                <!-- <h6 class="card-title">Recently Opened Jobs</h6> -->
                <p class="text-muted mb-3"> <span style="color: green; font-weight: bold;">Recently Opened Jobs These Past 30 Days</span></p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="closedJobListTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">Date Posted</th>
                                        <th class="text-center">Position</th>   
                                        <th class="text-center"> Apply Now </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $key => $data)
                                    @if($data->status === 'Open' && \Carbon\Carbon::parse($data->created_at)->diffInDays(\Carbon\Carbon::now()) <= 30) 
                                    <tr>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                                        <td class="text-center">{{ $data->position }}</td>
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
                                <!-- <h6 class="card-title">Open Job Listing</h6> -->
                                <p class="text-muted mb-3"> <span style="color: green; font-weight: bold;">Available Jobs</span></p>
                        <div class="table-responsive">
                            <table class="table table-hover" id="openJobListTable">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No. </th>
                                        <th class="text-center">Date Posted</th>
                                        <th class="text-center">Position</th>
                                        <th class="text-center">Apply Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $jobs = $jobs->sortBy('id'); // Sort jobs by 'id' in descending order
                                    $rowNumber = 1;
                                @endphp
                                @foreach($jobs2 as $key => $data)
                                @if($data->status === 'Open' && \Carbon\Carbon::parse($data->created_at)) 
                                <tr>
                                    <td class="text-center">{{ $rowNumber++ }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</td>
                                    <td class="text-center">{{ $data->position }}</td>
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

        <br><br>
        <!-- All Job Table Start -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">
                                <p class="text-muted mb-3"> <span style="color: green; font-weight: bold;"><strong>All Job Listings</strong></span></p>
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
                                        <th class="text-center">Action</th>
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
                                            @if($data->status === 'Open')
                                            <a href="{{ route('apply.job') }}" class="btn btn-primary btn-sm">Apply</a>
                                            @else
                                            <button class="btn btn-secondary btn-sm" disabled>Full</button>
                                            @endif
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


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="{{ route('job-vacancies') }}">Job Vacancy</a></h4>
                            <p class="description">Explore exciting career opportunities with MSU-IIT NMPC. Join us and be part of a dynamic team dedicated to excellence and innovation.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-map"></i></div>
                            <h4 class="title"><a href="{{ route('branch-location') }}">Branch Locator</a></h4>
                            <p class="description">Discover our branches conveniently located across the nation. Use our branch locator to find the nearest MSU-IIT NMPC branch and access our services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-person-fill-add"></i></div>
                            <h4 class="title"><a href="{{ route('user.login') }}">Register</a></h4>
                            <p class="description">Become a member of MSU-IIT NMPC. Register today to enjoy exclusive benefits, financial services, and participate in cooperative activities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="fa-solid fa-users"></i></div>
                            <h4 class="title"><a href="{{ route('about') }}">About</a></h4>
                            <p class="description">Learn more about MSU-IIT NMPC, a national multi-purpose cooperative committed to providing sustainable financial solutions and community development.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-people-fill"></i></div>
                            <h4 class="title"><a href="{{ route('testimonial') }}">Testimonials</a></h4>
                            <p class="description">Discover what our members say about their experiences with MSU-IIT NMPC. Read testimonials and stories of financial success and empowerment.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                            <h4 class="title"><a href="#">Contact</a></h4>
                            <p class="description">Reach out to us for inquiries, assistance, or to learn more about our services. Our dedicated team is here to provide you with the support you need.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->

        <!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->

        <!-- End Our Clients Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>MSU-IIT NMPC</h3>
                        <p>
                            Gregorio T. Lluch Sr. Ave., <br>
                            Pala-o Iligan City,<br>
                            9200, Philippines <br><br>
                            <strong>Phone:</strong> (063) 223-5874<br>
                            <strong>Email:</strong> msuiitnmpc@msuiitcoop.org<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Testimonials</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('job-vacancies') }}">Job Vacancy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('branch-location') }}">Branch Locator</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Stay Connected with MSU-IIT NMPC</h4>
                        <p>Explore the latest updates, news, and exclusive offers. Join our newsletter to be part of the MSU-IIT NMPC community and stay informed about the cooperative's activities and opportunities.</p>
                        <form action="" method="">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>MSU-IIT</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
                    Designed by <a href="">Whitesands</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="mail"><i class='bx bxs-envelope'></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('backend/assets4/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('backend/assets4/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets4/js/main.js') }}"></script>

    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Initialize DataTables for the tables -->
    <script>
        $(document).ready(function() {
            $('#openJobListTable').DataTable({
                order: [
                    [0, "asc"]
                ],
                "lengthMenu": [6, 10, 25, 50],
                "pageLength": 6,
            });
            $('#closedJobListTable').DataTable({
                order: [
                    [0, "desc"]
                ],
                "lengthMenu": [6, 10, 25, 50],
                "pageLength": 6,
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

</body>

</html>