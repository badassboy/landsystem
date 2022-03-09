
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:14 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Doctris - Doctor Appointment Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="Version" content="v1.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/doctris/layouts/assets/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- SLIDER -->
        <link rel="stylesheet" href="../assets/css/tiny-slider.css"/>
        <!-- Icons -->
        <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/remixicon.css" rel="stylesheet" type="text/css" />
        <link href="../../../../unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
        <!-- Css -->
        <link href="../assets/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="../assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                    <img src="../assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                </a>                
                <!-- Logo End -->
                
                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!-- Start Dropdown -->
                <ul class="dropdowns list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="uil uil-search"></i>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                                    <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block mb-1">Calvin Carlo</span>
                                        <small class="text-muted">Orthopedic</small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="doctor-dashboard.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                <a class="dropdown-item text-dark" href="doctor-profile-setting.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Start Dropdown -->
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Index One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Index Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Index Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Doctors</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Dashboard </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="doctor-dashboard.html" class="sub-menu-item">Dashboard</a></li>
                                        <li><a href="doctor-appointment.html" class="sub-menu-item">Appointment</a></li>
                                        <li><a href="patient-list.html" class="sub-menu-item">Patients</a></li>
                                        <li><a href="doctor-schedule.html" class="sub-menu-item">Schedule Timing</a></li>
                                        <li><a href="invoices.html" class="sub-menu-item">Invoices</a></li>
                                        <li><a href="patient-review.html" class="sub-menu-item">Reviews</a></li>
                                        <li><a href="doctor-messages.html" class="sub-menu-item">Messages</a></li>
                                        <li><a href="doctor-profile.html" class="sub-menu-item">Profile</a></li>
                                        <li><a href="doctor-profile-setting.html" class="sub-menu-item">Profile Settings</a></li>
                                        <li><a href="doctor-chat.html" class="sub-menu-item">Chat</a></li>
                                        <li><a href="login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item">Sign Up</a></li>
                                        <li><a href="forgot-password.html" class="sub-menu-item">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="doctor-team-one.html" class="sub-menu-item">Doctors One</a></li>
                                <li><a href="doctor-team-two.html" class="sub-menu-item">Doctors Two</a></li>
                                <li><a href="doctor-team-three.html" class="sub-menu-item">Doctors Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Patients</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="patient-dashboard.html" class="sub-menu-item">Dashboard</a></li>
                                <li><a href="patient-profile.html" class="sub-menu-item">Profile</a></li>
                                <li><a href="booking-appointment.html" class="sub-menu-item">Book Appointment</a></li>
                                <li><a href="patient-invoice.html" class="sub-menu-item">Invoice</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Pharmacy</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="pharmacy.html" class="sub-menu-item">Pharmacy</a></li>
                                <li><a href="pharmacy-shop.html" class="sub-menu-item">Shop</a></li>
                                <li><a href="pharmacy-product-detail.html" class="sub-menu-item">Medicine Detail</a></li>
                                <li><a href="pharmacy-shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="pharmacy-checkout.html" class="sub-menu-item">Checkout</a></li>
                                <li><a href="pharmacy-account.html" class="sub-menu-item">Account</a></li>
                            </ul>
                        </li>
        
                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item"> About Us</a></li>
                                <li><a href="departments.html" class="sub-menu-item">Departments</a></li>
                                <li><a href="faqs.html" class="sub-menu-item">FAQs</a></li>
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Blogs </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="terms.html" class="sub-menu-item">Terms & Policy</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="error.html" class="sub-menu-item">404 !</a></li>
                                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="https://shreethemes.in/doctris/layouts/admin/index.html" class="sub-menu-item" target="_blank">Admin</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-dashboard my-lg-5">
            <div class="container mt-xl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 rounded shadow">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-5 position-relative">
                                    <img src="../assets/images/doctors/dr-profile.png" class="img-fluid dr-profile-img" alt="">
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-7">
                                    <div class="p-lg-5 p-4">
                                        <small class="text-muted">25th December, 2020 - 5:00PM</small>

                                        <h4 class="my-3">Good Morning ! <br> <span class="text-primary h2">Dr. Christopher Burrell</span></h4>
                                        <p class="para-desc text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                                    
                                        <h6 class="mb-0">You have <span class="text-primary">18 patients</span> remaining today!</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <div class="card border-0 shadow rounded p-4">
                            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded shadow overflow-hidden bg-light" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Overview</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="experience-tab" data-bs-toggle="pill" href="#pills-experience" role="tab" aria-controls="pills-experience" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Experience</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="review-tab" data-bs-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Reviews</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="location-tab" data-bs-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Location</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="timetable-tab" data-bs-toggle="pill" href="#pills-timetable" role="tab" aria-controls="pills-timetable" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Time Table</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul><!--end nav pills-->

                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <h5 class="mb-1">Dr. Christopher Burrell</h5>
                                    <a href="#" class="text-primary">Gynecologist</a>, &nbsp;
                                    <a href="#" class="text-primary">Ph.D</a>
                                    <p class="text-muted mt-4">A gynecologist is a surgeon who specializes in the female reproductive system, which includes the cervix, fallopian tubes, ovaries, uterus, vagina and vulva. Menstrual problems, contraception, sexuality, menopause and infertility issues are diagnosed and treated by a gynecologist; most gynecologists also provide prenatal care, and some provide primary care.</p>
                                
                                    <h6>Specialties: </h6>

                                    <ul class="list-unstyled mt-4">
                                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Women's health services</li>
                                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Pregnancy care</li>
                                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Surgical procedures</li>
                                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Specialty care</li>
                                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Conclusion</li>
                                    </ul>

                                    <h6>My Team: </h6>

                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                                            <div class="card team border-0 rounded shadow overflow-hidden">
                                                <div class="team-person position-relative overflow-hidden">
                                                    <img src="../assets/images/doctors/05.jpg" class="img-fluid" alt="">
                                                    <ul class="list-unstyled team-like">
                                                        <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="title text-dark h5 d-block mb-0">Jessica McFarlane</a>
                                                    <small class="text-muted speciality">M.B.B.S, Dentist</small>
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <p class="text-muted mb-0">5 Star</p>
                                                    </div>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="d-flex">
                                                            <i class="ri-map-pin-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-time-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                                            <div class="card team border-0 rounded shadow overflow-hidden">
                                                <div class="team-person position-relative overflow-hidden">
                                                    <img src="../assets/images/doctors/06.jpg" class="img-fluid" alt="">
                                                    <ul class="list-unstyled team-like">
                                                        <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="title text-dark h5 d-block mb-0">Elsie Sherman</a>
                                                    <small class="text-muted speciality">M.B.B.S, Gastrologist</small>
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <p class="text-muted mb-0">5 Star</p>
                                                    </div>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="d-flex">
                                                            <i class="ri-map-pin-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-time-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                                            <div class="card team border-0 rounded shadow overflow-hidden">
                                                <div class="team-person position-relative overflow-hidden">
                                                    <img src="../assets/images/doctors/07.jpg" class="img-fluid" alt="">
                                                    <ul class="list-unstyled team-like">
                                                        <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="title text-dark h5 d-block mb-0">Bertha Magers</a>
                                                    <small class="text-muted speciality">M.B.B.S, Urologist</small>
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <p class="text-muted mb-0">5 Star</p>
                                                    </div>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="d-flex">
                                                            <i class="ri-map-pin-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-time-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                                            <div class="card team border-0 rounded shadow overflow-hidden">
                                                <div class="team-person position-relative overflow-hidden">
                                                    <img src="../assets/images/doctors/08.jpg" class="img-fluid" alt="">
                                                    <ul class="list-unstyled team-like">
                                                        <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="title text-dark h5 d-block mb-0">Louis Batey</a>
                                                    <small class="text-muted speciality">M.B.B.S, Neurologist</small>
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <p class="text-muted mb-0">5 Star</p>
                                                    </div>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="d-flex">
                                                            <i class="ri-map-pin-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-time-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                            <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled mt-2 mb-0">
                                                        <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                        <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
                                
                                <div class="tab-pane fade" id="pills-experience" role="tabpanel" aria-labelledby="experience-tab">
                                    <h5 class="mb-1">Experience:</h5>

                                    <p class="text-muted mt-4">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                                
                                    <h6>Professional Experience:</h6>

                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <div class="col-md-12">
                                                <div class="slider-range-four tiny-timeline">
                                                    <div class="tiny-slide text-center">
                                                        <div class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                            <p class="text-muted mb-0">2010 - 2014</p>
                                                            <h6 class="mt-1">Master Of Science</h6>
                                                            <p class="text-muted mb-0">X.Y.Z Hospital (NZ)</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class="tiny-slide text-center">
                                                        <div class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                            <p class="text-muted mb-0">2014 - 2016</p>
                                                            <h6 class="mt-1">Gynecology Test</h6>
                                                            <p class="text-muted mb-0">X.Y.Z Hospital (NZ)</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class="tiny-slide text-center">
                                                        <div class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                            <p class="text-muted mb-0">2016 - 2019</p>
                                                            <h6 class="mt-1">Master Of Medicine</h6>
                                                            <p class="text-muted mb-0">X.Y.Z Hospital (NZ)</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class="tiny-slide text-center">
                                                        <div class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                            <p class="text-muted mb-0">2019 - 2020</p>
                                                            <h6 class="mt-1">Orthopedics</h6>
                                                            <p class="text-muted mb-0">X.Y.Z Hospital (NZ)</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class="tiny-slide text-center">
                                                        <div class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                            <p class="text-muted mb-0">2020 to continue..</p>
                                                            <h6 class="mt-1">Gynecologist (Final)</h6>
                                                            <p class="text-muted mb-0">X.Y.Z Hospital (NZ)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
    
                                <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mt-4 pt-2 text-center">
                                            <div class="client-review-slider">
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                                    <img src="../assets/images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                                </div><!--end customer testi-->
                                                
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                                                    <img src="../assets/images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                                </div><!--end customer testi-->
                                                
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                                                    <img src="../assets/images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                                </div><!--end customer testi-->
                                                
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                                                    <img src="../assets/images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                                </div><!--end customer testi-->
                                                
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                                    <img src="../assets/images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                                </div><!--end customer testi-->
                                                
                                                <div class="tiny-slide text-center">
                                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                                                    <img src="../assets/images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                                </div><!--end customer testi-->
                                            </div><!--end carousel-->
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/amazon.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                    
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/google.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/lenovo.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/paypal.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/shopify.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/spotify.png" class="avatar avatar-client" alt="">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
    
                                <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="location-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card map border-0">
                                                <div class="card-body p-0">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="rounded" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
    
                                <div class="tab-pane fade" id="pills-timetable" role="tabpanel" aria-labelledby="timetable-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="card border-0 p-3 rounded shadow">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex justify-content-between">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Monday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Tuesday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Wednesday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Thursday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Friday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Saturday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 18.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Sunday</p>
                                                        <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 14.00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                            <div class="card border-0 text-center features feature-primary">
                                                <div class="icon text-center mx-auto rounded-md">
                                                    <span class="mb-0"><i class="uil uil-phone h3"></i></span>
                                                </div>
                    
                                                <div class="card-body p-0 mt-4">
                                                    <h5 class="title fw-bold">Phone</h5>
                                                    <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                    <a href="tel:+152534-468-854" class="link">+152 534-468-854</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                    
                                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                            <div class="card border-0 text-center features feature-primary">
                                                <div class="icon text-center mx-auto rounded-md">
                                                    <span class="mb-0"><i class="uil uil-envelope h3"></i></span>
                                                </div>
                    
                                                <div class="card-body p-0 mt-4">
                                                    <h5 class="title fw-bold">Email</h5>
                                                    <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                    <a href="mailto:contact@example.com" class="link">contact@example.com</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
                            </div><!--end tab content-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Footer Start -->
        <footer class="bg-footer py-4">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start text-center">
                            <p class="mb-0"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                            <li class="list-inline-item"><a href="terms.html" class="text-foot me-2">Terms</a></li>
                            <li class="list-inline-item"><a href="privacy.html" class="text-foot me-2">Privacy</a></li>
                            <li class="list-inline-item"><a href="aboutus.html" class="text-foot me-2">About</a></li>
                            <li class="list-inline-item"><a href="contact.html" class="text-foot me-2">Contact</a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <div class="offcanvas bg-white offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>Search now.....</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border bg-white rounded-pill" required="" placeholder="Search">
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="../assets/images/logo-dark.png" height="24" class="light-version" alt="">
                    <img src="../assets/images/logo-light.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="../assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="../assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="../assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="../assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="../assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="../assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/admin/index.html" target="_blank" class="mt-4"><img src="../assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Admin Dashboard</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end Style switcher -->
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/doctris-template" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- SLIDER -->
        <script src="../assets/js/tiny-slider.js"></script>
        <script src="../assets/js/tiny-slider-init.js"></script>
        <!-- Icons -->
        <script src="../assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="../assets/js/app.js"></script>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:16 GMT -->
</html>