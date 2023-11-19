<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MSU-IIT NMPC - Testimonials</title>
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
                    <li><a href="{{ route('about')}}">About</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="{{ route('job-vacancies') }}">Job Vacancy</a></li>
                            <li><a href="{{ route('branch-location') }}">Branch Locator</a></li>
                        </ul>
                    </li>
                    <li><a class="active" href="{{ route('testimonial') }}">Testimonials</a></li>
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
                    <h2>Testimonials</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->
        <!-- About Start -->
        <!-- ======= Our Team Section ======= -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="testimonial-item">
                            <img src="{{ asset('backend/assets3/images/c1.png') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A well-designed website is a digital masterpiece, seamlessly blending aesthetics and functionality. It captivates visitors with visually appealing layouts, intuitive navigation, and engaging content. User-friendly features enhance the browsing experience, making information easily accessible. A nice website embodies creativity and responsiveness, leaving a lasting, positive impression.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item mt-4 mt-lg-0">
                            <img src="{{ asset('backend/assets3/images/c2.png') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A nice website not only looks good but also delivers value. It offers informative and engaging content, quick load times, and responsive design, ensuring a seamless experience across various devices. Clear and intuitive navigation allows users to find what they need effortlessly. Such websites leave a memorable and favorable impression on visitors.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-item mt-4">
                            <img src="{{ asset('backend/assets3/images/c3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                An exceptional website captivates visitors with its elegant design and user-friendly interface. It offers informative content, engages users, and loads swiftly. Responsiveness ensures a seamless experience across devices, while robust security safeguards data. Such a website is a digital gem, making the online journey enjoyable and efficient.With engaging content and user-friendly navigation.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-item mt-4">
                            <img src="{{ asset('backend/assets3/images/c5.png') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A remarkable website is a digital masterpiece, seamlessly merging aesthetics and functionality. It greets users with a visually captivating design and ensures a smooth, intuitive experience. With engaging content and user-friendly navigation, it's a gateway to valuable information. Modern, responsive, and secure, it guarantees accessibility to a diverse audience.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="testimonial-item mt-4">
                            <img src="{{ asset('backend/assets3/images/c6.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="testimonial-item mt-4">
                            <img src="{{ asset('backend/assets3/images/c7.jpg') }}" class="testimonial-img" alt="">
                            <h3>Emily Harison</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->


        <!-- End Our Team Section -->

        <!-- ======= Our Skills Section ======= -->

        <!-- End Our Skills Section -->

        <!-- About End -->

        <!-- ======= Cta Section ======= -->


        <!-- End Cta Section -->

        <!-- End About Us Section -->

        <!-- Two Tables -->

        <!-- Two Tables End -->


        <!-- All Job Table Start -->

        <!-- All Job Table End -->


        <!-- ======= Services Section ======= -->

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


</body>

</html>