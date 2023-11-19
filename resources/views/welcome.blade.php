<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MSU-IIT NMPC - Welcome</title>
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

    <!-- =======================================================
  * Template Name: Flattern
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">You are Logged in as {{ Auth::user()->firstname }}</a>
                    @else
                    <a href="{{ route('user.login') }}" class="">Log in &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                    @if (Route::has('register'))
                    <a href="{{ route('login') }}" class="">Register &nbsp; <i class="fa-solid fa-user-plus"></i></a>
                    @endif
                    @endauth
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
                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="{{ route('job-vacancies') }}">Job Vacancy</a></li>
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
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('{{ asset('backend/assets3/images/image4.jpg') }}');">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="text-center">Welcome to <span>MSU-IIT NMPC</span></h2>
                            <p>Experience financial empowerment and community development with MSU-IIT NMPC. Our commitment is to provide sustainable financial solutions for a brighter future. Join us on this journey towards prosperity.</p>
                            <div class="text-center"><a href="https://msuiitcoop.org/" target="_blank" class="btn-get-started">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('{{ asset('backend/assets3/images/image2.png') }}'); background-size: cover; background-position: center;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="text-center">Explore Job Opportunities</h2>
                            <p>Discover exciting career opportunities with MSU-IIT NMPC. Join our team and contribute to the growth and success of the cooperative. Your journey to a fulfilling career starts here.</p>
                            <div class="text-center"><a href="{{ route('job-vacancies') }}" class="btn-get-started">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('{{ asset('backend/assets3/images/image3.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="text-center">Find Our Branches</h2>
                            <p>Locate MSU-IIT NMPC branches near you. Our nationwide network ensures easy access to our services. Use our branch locator to discover the closest branch and connect with us.</p>
                            <div class="text-center"><a href="{{ route('branch-location') }}" class="btn-get-started">Read More</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

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
                        <a class="cta-btn align-middle" href="{{ route('login') }}">Register</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

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
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <h1 class="text-center"> Branches </h1>
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-area1">Area 1</li>
                            <li data-filter=".filter-area2">Area 2</li>
                            <li data-filter=".filter-area3">Area 3</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <!-- Area 1 -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/tibanga-branch.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Tibanga-Main</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/tibanga-branch.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Tibanga-Main Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/tibanga-main</a>"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/bulua.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Bulua Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/bulua.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Bulua Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/bulua-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Carmen Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Carmen Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/carmen-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Cogon Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Cogon Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/cogon-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Laguindingan Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Laguindingan Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/laguindingan-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/manticao.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Manticao Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/manticao.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Manticao Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/manticao-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area1">
                        <img src="{{ asset('backend/assets3/images/puerto.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Puerto Branch</h4>
                            <p>Area 1</p>
                            <a href="{{ asset('backend/assets3/images/puerto.jpg') }}" data-gallery="portfolioGallery" style="width: 600px; height: 300px;" class="portfolio-lightbox preview-link" title="Puerto Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/puerto-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <!-- /Area 1 -->

                    <!-- Area 2 -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/palao.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Pala-O Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/palao.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pala-o Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/pala-o-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/buruun.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Buru-Un Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/buruun.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Buru-un Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/buru-un-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Kiwalan Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kiwalan Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/kiwalan-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/poblacion.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Poblacion Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/poblacion.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Poblacion Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/poblacion-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/suarez.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Suarez-Tominobo Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/suarez.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Suarez-Tominobo Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/suarez-tominobo-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area2">
                        <img src="{{ asset('backend/assets3/images/tubod.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Tubod Iligan Branch</h4>
                            <p>Area 2</p>
                            <a href="{{ asset('backend/assets3/images/tubod.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tubod Iligan Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/tubod-iligan-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <!-- /Area 2 -->

                    <!-- Area 3 -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/butuan.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Butuan Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/butuan.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Butuan Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/butuan-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/davao.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Davao Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/davao.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Davao Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/davao-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>General Santos Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="General Santos Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/general-santos-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/bacolod.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Bacolod LDN Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/bacolod.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bacolod LDN Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/bacolod-ldn-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Maranding Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maranding Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/maranding-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/pagadian.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Pagadian Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/pagadian.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pagadian Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/pagadian-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/tubodldn.png') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>Tubod LDN Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/tubodldn.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tubod LDN Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/tubod-ldn-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-area3">
                        <img src="{{ asset('backend/assets3/images/no_image.jpg') }}" class="img-fluid" alt="" style="width: 600px; height: 300px;">
                        <div class="portfolio-info">
                            <h4>San Francisco Branch</h4>
                            <p>Area 3</p>
                            <a href="{{ asset('backend/assets3/images/no_image.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="San Francisco Branch <br> <a href='http://localhost:8000/branch-detail/tibanga-main'>http://localhost:8000/branch-detail/san-francisco-branch</a>"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <!-- /Area 3 -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Clients</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Our Clients Section -->

    </main><!-- End #main -->

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
                <a href="#" class="mail"><i class='bx bxs-envelope' ></i></a>
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

</body>

</html>