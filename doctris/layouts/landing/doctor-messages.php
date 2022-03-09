
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:24 GMT -->
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
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
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

                    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <h5 class="mb-0">Messages</h5>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-12 mt-4 pt-2">
                                <div class="card rounded-0 border-0 shadow p-4">
                                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#compose-mail"><i class="uil uil-plus me-1"></i> Compose</a>

                                    <ul class="nav nav-pills nav-link-soft nav-justified flex-column mt-4 bg-white mb-0" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link rounded active" id="inbox-tab" data-bs-toggle="pill" href="#inbox" role="tab" aria-controls="inbox" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-inbox h5 align-middle me-2 mb-0"></i> Inbox</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="starred-tab" data-bs-toggle="pill" href="#starred" role="tab" aria-controls="starred" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-envelope-star h5 align-middle me-2 mb-0"></i> Starred</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="spam-tab" data-bs-toggle="pill" href="#spam" role="tab" aria-controls="spam" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-envelope-times h5 align-middle me-2 mb-0"></i> Spam</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="send-tab" data-bs-toggle="pill" href="#sent" role="tab" aria-controls="sent" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-envelope-upload h5 align-middle me-2 mb-0"></i> Sent</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="drafts-tab" data-bs-toggle="pill" href="#drafts" role="tab" aria-controls="drafts" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-envelope-edit h5 align-middle me-2 mb-0"></i> Drafts</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="delete-tab" data-bs-toggle="pill" href="#delete" role="tab" aria-controls="delete" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-trash h5 align-middle me-2 mb-0"></i> Delete</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-2">
                                            <a class="nav-link rounded" id="notes-tab" data-bs-toggle="pill" href="#notes" role="tab" aria-controls="notes" aria-selected="false">
                                                <div class="text-start px-3">
                                                    <span class="mb-0"><i class="uil uil-notes h5 align-middle me-2 mb-0"></i> Notes</span>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                    </ul><!--end nav pills-->
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-9 col-lg-9 col-md-8 col-12 mt-4 pt-2">
                                <div class="tab-content rounded-0 shadow" id="pills-tabContent">
                                    <div class="tab-pane fade bg-white show active" id="inbox" role="tabpanel" aria-labelledby="inbox-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkAll">
                                                                <label class="form-check-label fw-normal" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <a href="#" class="text-muted"><i class="uil uil-redo"></i></a>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 150px;" scope="col"></th>
                                                        <th class="border-bottom p-3" style="min-width: 600px;" scope="col"></th>
                                                        <th class="border-bottom p-3 text-end" style="min-width: 150px;" scope="col">
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-left icons"></i></a>
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-right icons"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox1">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Amy Lucier</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end class p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox2">
                                                                <label class="form-check-label" for="checkbox2"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Tameika Whittle</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end class p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox3">
                                                                <label class="form-check-label" for="checkbox3"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Barbara Bayne</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox4">
                                                                <label class="form-check-label" for="checkbox4"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Nita Griffin</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end class p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox5">
                                                                <label class="form-check-label" for="checkbox5"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Marc Flythe</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end class p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox6">
                                                                <label class="form-check-label" for="checkbox6"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Elaine Hannah</td>
                                                        <td class="p-3"><p class="text-muted mb-0">pain avoided.</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox7">
                                                                <label class="form-check-label" for="checkbox7"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Abraham Edwards</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox8">
                                                                <label class="form-check-label" for="checkbox8"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Allie Smith</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end class p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox9">
                                                                <label class="form-check-label" for="checkbox9"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Eleanor Cisco</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end class p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox10">
                                                                <label class="form-check-label" for="checkbox10"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Troy Turk</td>
                                                        <td class="p-3"><p class="text-muted mb-0">pain avoided.</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox11">
                                                                <label class="form-check-label" for="checkbox11"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Tyron Elliott</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox12">
                                                                <label class="form-check-label" for="checkbox12"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Betty Cook</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end class p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox13">
                                                                <label class="form-check-label" for="checkbox13"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Doris Morrison</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end class p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox14">
                                                                <label class="form-check-label" for="checkbox14"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Chad Potter</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end class p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                            
                                        <p class="text-end text-muted mb-0 py-2 mx-2">See more 14 of 35</p>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded" id="starred" role="tabpanel" aria-labelledby="starred-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkAll1">
                                                                <label class="form-check-label fw-normal" for="checkAll1"></label>
                                                            </div>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <a href="#" class="text-muted"><i class="uil uil-redo"></i></a>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 150px;" scope="col"></th>
                                                        <th class="border-bottom p-3" style="min-width: 600px;" scope="col"></th>
                                                        <th class="border-bottom p-3 text-end" style="min-width: 150px;" scope="col">
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-left icons"></i></a>
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-right icons"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox16">
                                                                <label class="form-check-label" for="checkbox16"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Amy Lucier</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox17">
                                                                <label class="form-check-label" for="checkbox17"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Tameika Whittle</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox18">
                                                                <label class="form-check-label" for="checkbox18"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Barbara Bayne</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4" id="spam" role="tabpanel" aria-labelledby="spam-tab">
                                        <span class="text-muted">Hooray, no spam here!</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded" id="sent" role="tabpanel" aria-labelledby="send-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkAll2">
                                                                <label class="form-check-label fw-normal" for="checkAll2"></label>
                                                            </div>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 15px;" scope="col">
                                                            <a href="#" class="text-muted"><i class="uil uil-redo"></i></a>
                                                        </th>
                                                        <th class="border-bottom p-3" style="min-width: 150px;" scope="col"></th>
                                                        <th class="border-bottom p-3" style="min-width: 600px;" scope="col"></th>
                                                        <th class="border-bottom p-3 text-end" style="min-width: 150px;" scope="col">
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-left icons"></i></a>
                                                            <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="uil uil-angle-right icons"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox19">
                                                                <label class="form-check-label" for="checkbox19"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Amy Lucier</td>
                                                        <td class="p-3"><p class="text-muted mb-0">In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.</p></td>
                                                        <td class="text-end p-3"><small>17 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox20">
                                                                <label class="form-check-label" for="checkbox20"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Tameika Whittle</td>
                                                        <td class="p-3"><p class="text-muted mb-0">The wise man therefore always holds in these matters to this principle of selection.</p></td>
                                                        <td class="text-end p-3"><small>27 Jan 2021</small></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input check" type="checkbox" value="" id="checkbox21">
                                                                <label class="form-check-label" for="checkbox21"></label>
                                                            </div>
                                                        </th>
                                                        <th class="p-3"><i class="uil uil-star text-muted"></i></th>
                                                        <td class="p-3">Barbara Bayne</td>
                                                        <td class="p-3"><p class="text-muted mb-0">We denounce with righteous</p></td>
                                                        <td class="text-end p-3"><small>21 Feb 2021</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4" id="drafts" role="tabpanel" aria-labelledby="drafts-tab">
                                        <span class="text-muted">You don't have any saved drafts. Saving a draft allows you to keep a message you aren't ready to send yet.</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                                        <span class="text-muted">No conversations in Trash.</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                                        <span class="text-muted">No notes in Notes</span>
                                    </div><!--end teb pane-->
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

        <!-- Compose Mail Start -->
        <div class="modal fade" id="compose-mail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Compose</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="To">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Cc">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Bcc">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div id="editor"><p>Hello,<br><br> Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation. <br><br>Thank you</p></div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compose Mail End -->
        
        <!-- javascript -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- ckeditor -->
        <script src="../assets/js/ckeditor.js"></script>
        <!-- Icons -->
        <script src="../assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="../assets/js/app.js"></script>

        <script>
            $("#checkAll").click(function () {
                $(".check").prop('checked', $(this).prop('checked'));
            });

            ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        </script>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:25 GMT -->
</html>