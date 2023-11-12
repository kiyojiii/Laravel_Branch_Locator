<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WhiteSands</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/334c45a40c.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('backend/assets2/css/style.css') }}">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.js"></script>
</head>

<body>
    @include('sweetalert::alert')
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
                        <a href="" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('job-vacancies') }}" class="nav-item nav-link">Job Vacancies</a>
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
                                <li><a class="dropdown-item" href="{{ route('user.user_index') }}">Profile</a></li>
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

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Welcome<br>{{ Auth::user()->firstname }}!</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">We're delighted to have you here, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}. Please feel free to explore and enjoy your time with the features of this website. If you are new, don't forget to update your profile details in the profile menu.</p>
                            <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Explore</a> -->
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{ asset('backend/assets2/img/hero.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-map text-primary mb-4"></i>
                                <h5>Discover Different Branches</h5>
                                <p>Find the nearest branches with ease. We're here to serve you where you need us. Use our branch locator to locate the closest branch and access our services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-briefcase text-primary mb-4"></i>
                                <h5>Explore Exciting Job Opportunities</h5>
                                <p>Are you ready to embark on a new career path? Check out our latest job vacancies and join our team of talented professionals. Exciting opportunities await you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Customer-Centric Approach</h5>
                                <p>We're dedicated to delivering the best service to our customers. Whether you're looking for our branches or seeking new job opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Accessibility</h5>
                                <p>Whenever you need to find a branch or explore job openings, you can count on us. We're here 24/7 to meet your needs and to make your experience smooth and convenient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('backend/assets3/images/image1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('backend/assets3/images/image2.png') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('backend/assets3/images/image3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('backend/assets3/images/image4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa-solid fa-location-dot text-primary me-2"></i>Whitesands</h1>
                        <p class="mb-4">Discover Multi-Cooperative Branches and Job Opportunities</p>
                        <p class="mb-4">Welcome to WhiteSands, your gateway to explore multi-cooperative branches and exciting job vacancies. We're here to connect you with opportunities and help you find your next career move or business expansion.</p>
                        <p class="mb-4">With our user-friendly platform, you can easily locate branches of various cooperatives and discover job openings from a variety of industries. Whether you're a job seeker or an organization looking for top talent, WhiteSands has you covered.</p>
                        @php
                            $branches = \App\Models\Spot::count();
                        @endphpp
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $branches }}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">No. of</p>
                                        <h6 class="text-uppercase mb-0">Branches</h6>
                                    </div>
                                </div>
                            </div>
                            @php
                            $openJobsCount = \App\Models\JobVacancy::where('status', 'Open')->count();
                            @endphp
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $openJobsCount }}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">No. of</p>
                                        <h6 class="text-uppercase mb-0">Jobs Vacant</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Developers</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('backend/assets3/images/m3.png') }}" alt="">
                            </div>
                            <h5 class="mb-0">Christine Anne Pintac</h5>
                            <small>Member</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://www.facebook.com/tine.ptc"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('backend/assets3/images/m2.png') }}" alt="">
                            </div>
                            <h5 class="mb-0">Gabrielle Sierra Lanuza</h5>
                            <small>Member</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://www.facebook.com/Gabriellelanuza"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('backend/assets3/images/m1.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Jeah Pearl Menette Daligdig</h5>
                            <small>Leader</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://www.facebook.com/jpmd01"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('backend/assets3/images/m4.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Clint Joshua Velasquez</h5>
                            <small>Member</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://www.facebook.com/Kiyojiii"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('backend/assets3/images/m4.png') }}" alt="">
                            </div>
                            <h5 class="mb-0">Samuel Paul Jinayon</h5>
                            <small>Member - Pogi</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://www.facebook.com/samuel.jinayon"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>A well-designed website is a digital masterpiece, seamlessly blending aesthetics and functionality. It captivates visitors with visually appealing layouts, intuitive navigation, and engaging content. User-friendly features enhance the browsing experience, making information easily accessible. A nice website embodies creativity and responsiveness, leaving a lasting, positive impression.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('backend/assets3/images/c1.png') }}" style="width: 50px; height: 50px;" alt="Client Image">
                            <div class="ps-3">
                                <h5 class="mb-1">John Doe</h5>
                                <small>CEO, XYZ Inc.</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>A nice website not only looks good but also delivers value. It offers informative and engaging content, quick load times, and responsive design, ensuring a seamless experience across various devices. Clear and intuitive navigation allows users to find what they need effortlessly. Such websites leave a memorable and favorable impression on visitors.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('backend/assets3/images/c2.png') }}" style="width: 50px; height: 50px;" alt="Client Image">
                            <div class="ps-3">
                                <h5 class="mb-1">Jane Smith</h5>
                                <small>CTO, ABC Corp.</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>An exceptional website captivates visitors with its elegant design and user-friendly interface. It offers informative content, engages users, and loads swiftly. Responsiveness ensures a seamless experience across devices, while robust security safeguards data. Such a website is a digital gem, making the online journey enjoyable and efficient.With engaging content and user-friendly navigation</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('backend/assets3/images/c3.jpg') }}" style="width: 50px; height: 50px;" alt="Client Image">
                            <div class="ps-3">
                                <h5 class="mb-1">David Wilson</h5>
                                <small>COO, XYZ Ltd.</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>A remarkable website is a digital masterpiece, seamlessly merging aesthetics and functionality. It greets users with a visually captivating design and ensures a smooth, intuitive experience. With engaging content and user-friendly navigation, it's a gateway to valuable information. Modern, responsive, and secure, it guarantees accessibility to a diverse audience.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('backend/assets3/images/c5.png') }}" style="width: 50px; height: 50px;" alt="Client Image">
                            <div class="ps-3">
                                <h5 class="mb-1">Laura Johnson</h5>
                                <small>Founder, LMN Group</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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
                                <a href="">Branch Locator</a>
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
</body>

</html>