
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:25 GMT -->
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
        <!-- simplebar -->
        <link href="../assets/css/simplebar.css" rel="stylesheet" type="text/css" />
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
            <div class="container-fluid">
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
        <section class="bg-dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12 d-none d-lg-block">
                        <div class="rounded shadow overflow-hidden sticky-bar">
                            <div class="card border-0">
                                <img src="../assets/images/doctors/profile-bg.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
                                <img src="../assets/images/doctors/01.jpg" class="rounded-circle shadow-md avatar avatar-md-md" alt="">
                                <h5 class="mt-3 mb-1">Dr. Calvin Carlo</h5>
                                <p class="text-muted mb-0">Orthopedic</p>
                            </div>

                            <ul class="list-unstyled sidebar-nav mb-0">
                                <li class="navbar-item"><a href="doctor-dashboard.html" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Dashboard</a></li>
                                <li class="navbar-item"><a href="doctor-appointment.html" class="navbar-link"><i class="ri-calendar-check-line align-middle navbar-icon"></i> Appointment</a></li>
                                <li class="navbar-item"><a href="doctor-schedule.html" class="navbar-link"><i class="ri-timer-line align-middle navbar-icon"></i> Schedule Timing</a></li>
                                <li class="navbar-item"><a href="invoices.html" class="navbar-link"><i class="ri-pages-line align-middle navbar-icon"></i> Invoices</a></li>
                                <li class="navbar-item"><a href="doctor-messages.html" class="navbar-link"><i class="ri-mail-unread-line align-middle navbar-icon"></i> Messages</a></li>
                                <li class="navbar-item"><a href="doctor-profile.html" class="navbar-link"><i class="ri-user-line align-middle navbar-icon"></i> Profile</a></li>
                                <li class="navbar-item"><a href="doctor-profile-setting.html" class="navbar-link"><i class="ri-user-settings-line align-middle navbar-icon"></i> Profile Settings</a></li>
                                <li class="navbar-item"><a href="patient-list.html" class="navbar-link"><i class="ri-empathize-line align-middle navbar-icon"></i> Patients</a></li>
                                <li class="navbar-item"><a href="patient-review.html" class="navbar-link"><i class="ri-chat-1-line align-middle navbar-icon"></i> Patients Review</a></li>
                                <li class="navbar-item"><a href="doctor-chat.html" class="navbar-link"><i class="ri-chat-voice-line align-middle navbar-icon"></i> Chat</a></li>
                                <li class="navbar-item"><a href="login.html" class="navbar-link"><i class="ri-login-circle-line align-middle navbar-icon"></i> Login</a></li>
                                <li class="navbar-item"><a href="forgot-password.html" class="navbar-link"><i class="ri-device-recover-line align-middle navbar-icon"></i> Forgot Password</a></li>
                            </ul>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-9 col-lg-8 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="row">
                            <div class="col-xl-3 col-lg-5 col-md-5 col-12">
                                <div class="card border-0 rounded shadow">
                                    <div class="text-center p-4 border-bottom">
                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow" alt="">
                                        <h5 class="mt-3 mb-1">Dr. Calvin Carlo</h5>
                                        <p class="text-muted mb-0">Orthopedic</p>
                                    </div>

                                    <div class="p-2 chat chat-list" data-simplebar style="max-height: 450px;">
                                        <a href="#" class="d-flex chat-list active p-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Christopher</h6>
                                                    <small class="text-muted">10 Min</small>
                                                </div>
                                                <div class="text-muted text-truncate">Hello</div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Dr. Cristino</h6>
                                                    <small class="text-muted">20 Min</small>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <div class="text-dark h6 mb-0 text-truncate">Hi, How are you?</div>
                                                    <span class="badge badge-pill badge-soft-danger">2</span>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Faye</h6>
                                                    <small class="text-muted">30 Min</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Heyy</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Ronald</h6>
                                                    <small class="text-muted">2 Hours</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Hey, How are you sir?</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Melissa</h6>
                                                    <small class="text-muted">3 Hours</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Good Afternoon</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/06.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Dr. Elsie</h6>
                                                    <small class="text-muted">10 Hours</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Good Morning sir, how can i help you?</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Jerry</h6>
                                                    <small class="text-muted">16 Hours</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Please give me appointment</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/08.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Dr. Louis</h6>
                                                    <small class="text-muted">1 Days</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Hii</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Randall</h6>
                                                    <small class="text-muted">2 Days</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Hello Sir</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/10.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-danger on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Mary</h6>
                                                    <small class="text-muted">3 Days</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">How are you sir?</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex chat-list p-2 mt-2 rounded position-relative">
                                            <div class="position-relative">
                                                <img src="../assets/images/client/08.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>
                                            <div class="overflow-hidden flex-1 ms-2">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="text-dark mb-0 d-block">Lester</h6>
                                                    <small class="text-muted">4 Days</small>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-muted text-truncate">Hello please give me answer.</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-9 col-lg-7 col-md-7 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="card chat chat-person border-0 shadow rounded">
                                    <div class="d-flex justify-content-between border-bottom p-4">
                                        <div class="d-flex">
                                            <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="overflow-hidden ms-3">
                                                <a href="#" class="text-dark mb-0 h6 d-block text-truncate">Cristino Murphy</a>
                                                <small class="text-muted"><i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i> Online</small>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-magnify icons"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0" style="width: 200px;">
                                                    <form>
                                                        <input type="text" id="text1" name="name" class="form-control border bg-white" placeholder="Search...">
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h icons"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-user align-middle h6"></i></span> Profile</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-trash align-middle h6"></i></span> Delete</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="p-4 list-unstyled mb-0 chat" data-simplebar style="background: url('../assets/images/bg/bg-chat.png') center center; max-height: 500px;">
                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hey Calvin</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>59 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hello Cristino</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">How can i help you?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>44 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Nice to meet you</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>42 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Hope you are doing fine?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>40 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">I'm good thanks for asking</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">I am intrested to know more about your prices and services you offer</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>35 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Sure please check below link to find more useful information <a href="https://1.envato.market/landrick" target="_blank" class="text-primary">https://shreethemes.in/landrick/</a></p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>25 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Thank you 😊</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>20 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">Welcome</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>18 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="p-2 rounded-bottom shadow">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control border" placeholder="Enter Message...">
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-message icons"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-smile icons"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-paperclip icons"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-message align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="#" class="title text-dark h5">New Messages</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="#" class="link">Read more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-envelope-star align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="#" class="title text-dark h5">Latest Proposals</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="#" class="link">View more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-hourglass align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="#" class="title text-dark h5">Package Expiry</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="#" class="link">Check here <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-heart align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="#" class="title text-dark h5">Saved Items</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="#" class="link">View items <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
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
        <!-- simplebar -->
        <script src="../assets/js/simplebar.min.js"></script>
        <!-- Icons -->
        <script src="../assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="../assets/js/app.js"></script>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:26 GMT -->
</html>