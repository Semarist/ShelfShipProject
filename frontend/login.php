<?php
include '../backend/db_conn.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shelf Ship</title>
    <meta name="description" content="Shelf Ship">
    <meta name="author" content="RunWebRun">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/svg" href="images/logo.svg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- START: Styles -->
    <!-- Swiper -->
    <link rel="stylesheet" href="assets/vendor/swiper/dist/css/swiper.min.css" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css" />
    <!-- Themebau -->
    <link rel="stylesheet" href="assets/css/themebau.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <link rel="stylesheet" href="styles.css">

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
</head>

<body>

<div class="auth_container">
    <div class="content-wrap">
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="error_popup"><?php echo $_SESSION['error']; ?></div>
        <?php } ?>
        <?php unset($_SESSION['error']); ?>
        <div class="py-160 bg-dark">
            <div class="container">
                <div class="row justify-content-center text-white">
                    <div class="col-lg-10">
                        <h1 class="display-4 text-white mt-5 mb-130 show-on-scroll" data-show-duration="500" data-show-distance="10">Login.</h1>
                        <form action="../backend/login.php" method="post">
                            <p class="lead font-weight-medium mb-30 mt-60 pt-9">Enter Your Credentials:</p>
                            <div class="row gh-1 gv-3 mt-30">
                                <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="250">
                                    <input name="email" type="email" class="form-control form-control-lg form-control-white" placeholder="Email" required>
                                </div>
                                <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="250">
                                    <input name="password" type="password" class="form-control form-control-lg form-control-white" placeholder="Password" required>
                                </div>
                            </div>
                            <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="submit" name="button" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            <div class="mt-40">
                                <a href="register.php" class=" text-white mt-5 mb-150" data-show-duration="500" data-show-distance="10">Create a new account.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START: Scripts -->
<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap Validator -->
<script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
<!-- ImagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Swiper -->
<script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>
<!-- Animejs -->
<script src="assets/vendor/animejs/lib/anime.min.js"></script>
<!-- Rellax -->
<script src="assets/vendor/rellax/rellax.min.js"></script>
<!-- Countdown -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<!-- Moment.js -->
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script src="assets/vendor/isotope-packery/packery-mode.pkgd.min.js"></script>
<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- Fancybox -->
<script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- Themebau -->
<script src="assets/js/themebau.min.js"></script>
<!-- END: Scripts -->
</body>
</html>