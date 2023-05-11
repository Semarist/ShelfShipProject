<?php
include '../backend/db_conn.php';

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shelf Ship</title>
    <meta name="description" content="Themebau">
    <meta name="author" content="RunWebRun">
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
<body>
<?php include "navBar.php"; ?>
<div class="content-wrap">
    <div class="container isotope">
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="success_popup"><?php echo $_SESSION['success']; ?></div>
        <?php } ?>
        <?php unset($_SESSION['success']); ?>
        <h1 class="mt-160 py-10 mb-100 text-center show-on-scroll" data-show-duration="500" data-show-distance="10">Libraries</h1>
        <div class="container isotope mt-130">
            <div class="pt-30 show-on-scroll" data-show-duration="800">
                <div id="libraries_grid" class="row gh-1 gv-1 isotope-grid mb-100">
                    <!-- Libraries will be displayed here using ajax-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START: Scripts -->
<script>
    $(document).ready(function() {
        // Send an AJAX request to get the list of libraries
        $.getJSON("../backend/getLibraries.php", function(data) {
            console.log(data); // Debugging statement
            // Loop through the list of libraries and display them
            $.each(data, function(index, library) {
                console.log('Generating HTML for library ' + index + ':', library);

                var html = '<div class="col-12 col-sm-6 isotope-item">' +
                    '<a class="card card-portfolio card-overlay card-hover-appearance text-white text-center card-image-lg">' +
                    '<span class="card-img">' +
                    '<img src="' + library.image + '" alt="">' +
                    '<span class="background-color" style="background-color: rgba(14, 14, 14, 0.7);"></span>' +
                    '</span>' +
                    '<span class="card-img-overlay">' +
                    '<span class="card-title h4">' + library.name + '</span>' +
                    '</span>' +
                    '</a>' +
                    '</div>';
                $("#libraries_grid").append(html);
            });
        });
    });
</script>
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