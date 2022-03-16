<?php 

include("rest_api.php");
$api = new Application();

$id = $_GET['id'];
if (isset($_POST['update'])) {
    $password = $_POST['password'];
    $cpwd= $_POST['confirm_password'];

    if (empty($password) || empty($cpwd)) {
        echo "field required";
    }else {
        $send_email = $api->newPassword($password,$id);
        if ($send_email) {
            echo "Password reset successfully";
        }else {
            "Failed in updating password";
        }
    }
}
















 ?>
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:26 GMT -->
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
                                <h4 class="text-center">Recover Account</h4>  
                <form class="login-form mt-4" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="mb-3">
                                <label class="form-label">New Password<span class="text-danger">*</span></label>
                                <input type="password" name="new_password" class="form-control" placeholder="New Password" required="required">
                            </div>

                             <div class="mb-3">
                                <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required="required">
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
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


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 21:07:26 GMT -->
</html>