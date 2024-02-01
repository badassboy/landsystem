<?php 
session_start();
include("rest_api.php");
$api = new Application();

if (isset($_POST['login'])) {
    $email = $api->testInput($_POST['email']);
    $password = $api->testInput($_POST['password']);

    if (empty($email) || empty($password)) {
        $msg = "field required";
    }else {
        $login = $api->loginUser($email,$password);
        // echo gettype($login);
        if (is_array($login)) {

            if ($login['registerType'] == "district_assembly" AND $login['verified'] == "yes") {
                $_SESSION['id'] = $login['id'];
                header("Location:district.php");
                exit();
            }elseif ($login['registerType'] == "care_taker" AND $login['verified'] == "yes") {
                $_SESSION['id'] = $login['id'];
                header("Location:care_taker.php");
                exit();
            }elseif($login['registerType'] == "supreme" AND $login['verified'] == "yes"){

                $_SESSION['id'] = $login['id'];
                header("Location:omanhene.php");
                exit();
            }else {
                echo "login failed or verify your email";
            }
            
        }else {
            echo "false";
        }
        
        // if (!is_null($login) || $login != false) {

        //     if ($login['registerType'] == "care_taker") {
        //         $_SESSION['id'] = $login['id'];
        //         header("Location:care_taker.php");
        //         exit;
        //     }elseif ($login['registerType'] == "district_assembly") {
        //         $_SESSION['id'] = $login['id'];
        //         header("Location:district.php");
        //         exit;
        //     }

        // }else {
        //     echo "no";
        // }

       
    }
}




 ?>
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:19 GMT -->
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
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="index.html" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home d-flex bg-light align-items-center" style="background: url('../assets/images/bg/bg-lines-one.png') center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <img src="../assets/images/logo-dark.png" height="24" class="mx-auto d-block" alt="">
                        <div class="card login-page bg-white shadow mt-4 rounded border-0">
                            <div class="card-body">
                                <h4 class="text-center">Sign In</h4>  
                    <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                    <input type="email"  class="form-control" placeholder="Email" name="email" required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input align-middle" type="checkbox" value="" id="remember-check">
                                                        <label class="form-check-label" for="remember-check">Remember me</label>
                                                    </div>
                                                </div>
                                                <a href="forgot-password.php" class="text-dark h6 mb-0">Forgot password ?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" name="login" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-3 text-center">
                                            <h6 class="text-muted">Or</h6>
                                        </div><!--end col-->
                                        
                                        <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="#" class="btn btn-soft-primary"><i class="uil uil-facebook"></i> Facebook</a>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="#" class="btn btn-soft-primary"><i class="uil uil-google"></i> Google</a>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="signup.php" class="text-dark fw-bold">Sign Up</a></p>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div><!---->
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        
        <!-- javascript -->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- Icons -->
        <script src="../assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="../assets/js/app.js"></script>
        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:19 GMT -->
</html>