<?php 

include("rest_api.php");
$api = new Application();

if (isset($_POST['register'])) {
    $firstName = $api->testInput($_POST['first_name']);
    $lastName = $api->testInput($_POST['last_name']);
    $email = $api->testInput($_POST['email']);
    $password =  $api->testInput($_POST['pwd']);
    $cpwd = $api->testInput($_POST['cpwd']);
    $registerType = $_POST['register_type'];

    // if (empty($firstName)|| empty($lastName)|| empty($email)||empty($password)|| empty($resgisterType)) {
    //     echo "fields required";
    // }else {

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if ($requestMethod == "POST") {
            $register = $api->registerUser($firstName,$lastName,$email,$password,$cpwd,$registerType);
            if ($register) {
                header("Location:login.php");
                exit();
                // $msg = '<div class="alert alert-success" role="alert">Registration successful.Check your 
                // email for confirmation email</div>';

                // $api->sendLink($email);



            }else {
                $msg = '<div class="alert alert-success" role="alert">Registration Failed</div>';
            }
        }
    // }
}




?>



<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:26 GMT -->
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
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/remixicon.css" rel="stylesheet" type="text/css" />
        <link href="../../../../unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
        <!-- Css -->
        <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />

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
        <section class="bg-half-150 d-table w-100 bg-light" style="background: url('../assets/images/bg/bg-lines-one.png') center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <?php 

                                if (isset($msg)) {
                                    echo $msg;
                                }

                                 ?>
                                 
                        <img src="../assets/images/logo-dark.png" height="24" class="mx-auto d-block" alt="">
                        <div class="card login-page bg-white shadow mt-4 rounded border-0">
                            <div class="card-body">

                                
                                <h4 class="text-center">Sign Up</h4>

                                <form action="" method="post" class="login-form mt-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">                                               
                                                <label class="form-label">First name <span class="text-danger">*</span></label>
        <input type="text" name="first_name" class="form-control" placeholder="First Name"  required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">                                                
                                                <label class="form-label">Last name <span class="text-danger">*</span></label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name"  required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control" placeholder="Email" name="email" required="required">
                                            </div>
                                        </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Register As<span class="text-danger">*</span></label>
                        <select class="form-control" name="register_type" required  id="exampleFormControlSelect1" placeholder="Register As">
                              <option value="care_taker">Chief CareTaker</option>
                              <option value="district_assembly">Distric Assembly</option>
                              <option value="supreme">Supremen Chief(Omanhene)</option>
                             
                            </select>
                    </div>
                </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required="required">
                                            </div>
                                        </div>

                                          <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
        <input type="password" name="cpwd" class="form-control" placeholder=" Confirm Password" required="required">
                                            </div>
                                        </div>

                                       <!--  <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input align-middle" type="checkbox" value="" id="accept-tnc-check">
                                                    <label class="form-check-label" for="accept-tnc-check">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-md-12">
                                            <div class="d-grid">
                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                                            </div>
                                        </div>

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Already Registered?</small> <a href="login.php" class="text-dark fw-bold">Login</a></p>
                                        </div>



                                       <!--  <div class="col-lg-12 mt-3 text-center">
                                            <h6 class="text-muted">Or</h6>
                                        </div> -->
                                        <!--end col-->
                                        
                                       <!--  <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-facebook"></i> Facebook</a>
                                            </div>
                                        </div> -->
                                        <!--end col-->
                                        
                                       <!--  <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-google"></i> Google</a>
                                            </div>
                                        </div> -->
                                        <!--end col-->

                                        <!-- <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="login.html" class="text-dark fw-bold">Sign in</a></p>
                                        </div> -->
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
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Icons -->
        <script src="assets/js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="assets/js/app.js"></script>
        
    </body>



</html>