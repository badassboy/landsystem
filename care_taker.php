<?php  

include("rest_api.php");
$api = new Application();



?>

<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:16 GMT -->
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
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        
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
                                <li class="navbar-item"><a href="care_taker.php" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i>Dashboard</a></li>
                                <li class="navbar-item"><a href="doctor-appointment.php" class="navbar-link"><i class="ri-calendar-check-line align-middle navbar-icon"></i>Land Info</a></li>
                                <li class="navbar-item"><a href="logout.php" class="navbar-link"><i class="ri-calendar-check-line align-middle navbar-icon"></i>LogOut</a></li>
                                <!-- <li class="navbar-item"><a href="doctor-schedule.php" class="navbar-link"><i class="ri-timer-line align-middle navbar-icon"></i> Schedule Timing</a></li>
                                <li class="navbar-item"><a href="invoices.php" class="navbar-link"><i class="ri-pages-line align-middle navbar-icon"></i> Invoices</a></li>
                                <li class="navbar-item"><a href="doctor-messages.php" class="navbar-link"><i class="ri-mail-unread-line align-middle navbar-icon"></i> Messages</a></li>
                                <li class="navbar-item"><a href="doctor-profile.php" class="navbar-link"><i class="ri-user-line align-middle navbar-icon"></i> Profile</a></li>
                                <li class="navbar-item"><a href="logout.php" class="navbar-link"><i class="ri-login-circle-line align-middle navbar-icon"></i> Logout</a></li> -->
                                <!-- <li class="navbar-item"><a href="doctor-profile-setting.html" class="navbar-link"><i class="ri-user-settings-line align-middle navbar-icon"></i> Profile Settings</a></li>
                                <li class="navbar-item"><a href="patient-list.html" class="navbar-link"><i class="ri-empathize-line align-middle navbar-icon"></i> Patients</a></li>
                                <li class="navbar-item"><a href="patient-review.html" class="navbar-link"><i class="ri-chat-1-line align-middle navbar-icon"></i> Patients Review</a></li>
                                <li class="navbar-item"><a href="doctor-chat.html" class="navbar-link"><i class="ri-chat-voice-line align-middle navbar-icon"></i> Chat</a></li>
                                <li class="navbar-item"><a href="forgot-password.html" class="navbar-link"><i class="ri-device-recover-line align-middle navbar-icon"></i> Forgot Password</a></li> -->
                            </ul>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
                        <h5 class="mb-0">Dashboard</h5>
                        <div class="row">

                            <div class="col-12 mt-4">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center">

                                        <thead>
                    <tr>
                        <th class="border-bottom p-3" style="min-width: 50px;">#</th>
                        <th class="border-bottom p-3" style="min-width: 180px;">Name</th>
                        <!-- <th class="border-bottom p-3">Phone</th> -->
                        <th class="border-bottom p-3">PlotSize</th>
                       
                        <th class="border-bottom p-3" style="min-width: 150px;">AllocNumber</th>
                        
                        <!-- <th class="border-bottom p-3">Site Plan</th> -->
                        <!-- <th class="border-bottom p-3">Signature</th> -->
                        
                        <th class="border-bottom p-3" style="min-width: 150px;"></th>
                    </tr>
                                        </thead>

                                        <tbody>
                                            <?php 

                                             $land_data = $api->landBought();
                                             foreach ($land_data as $row) {
                                                // echo $row['id'];
                                                $firstName = $row['firstName'];
                                                $lastName = $row['lastName'];
                                                $fullName = $firstName." ".$lastName;

                                               
                                                 echo '

                                                 <tr>
                                                <th class="p-3">'.$row['id'].'</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">'.$fullName.'</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                
                                                <td class="p-3">'.$row['plot_size'].'</td>
                                                
                                                <td class="p-3">'.$row['allocation_number'].'</td>
                                            
                                               

                                               

                                                
                <td class="text-end p-3">
                   

                   

                    

                  
                </td>
                                            </tr>


                                                 ';
                                             }

                                            ?>
                                           
                                        </tbody>

                                    </table>
                                </div>
                            </div>



                           <!--  <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Appointment <span class="badge badge-pill badge-soft-primary ms-1">+15%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-1"></div>
                                </div>
                            </div> -->
                            
                           <!--  <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Patients <span class="badge badge-pill badge-soft-success ms-1">+20%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-2"></div>
                                </div>
                            </div> -->
                            
                           <!--  <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Urgent <span class="badge badge-pill badge-soft-warning ms-1">+5%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-3"></div>
                                </div>
                            </div> -->
                           <!--  
                            <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Canceled <span class="badge badge-pill badge-soft-danger ms-1">-5%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-4"></div>
                                </div>
                            </div> -->

                        </div>

                        

                        <!-- what needs to be commented out -->

                       <!--  <div class="row">
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-message align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">New Messages</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">Read more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            
                           <!--  <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-envelope-star align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Latest Proposals</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">View more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            
                           <!--  <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-hourglass align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Package Expiry</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">Check here <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-heart align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Saved Items</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">View items <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div> -->

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
        <!-- SLIDER -->
        <script src="../assets/js/tiny-slider.js"></script>
        <script src="../assets/js/tiny-slider-init.js"></script>
        <!-- Chart -->
        <script src="../assets/js/apexcharts.min.js"></script>
        <script src="../assets/js/areachart.init.js"></script>
        <!-- Icons -->
        <script src="../assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="../assets/js/app.js"></script>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:19 GMT -->
</html>