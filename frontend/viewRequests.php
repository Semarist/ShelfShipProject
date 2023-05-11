<?php
    include "../backend/db_conn.php";
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }

    if($_SESSION['user_type'] != 1){
        header("Location: home.php");
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM requests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $requests = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $requests[] = $row;
        }
    } else {
        $requests = null;
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
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
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
<?php include 'navBar.php'; ?>
<div class="content-wrap">
    <div class="container pt-30 pb-130 mt-n10">
        <?php if ($requests != null) { ?>
            <div class="mt-100">
                <h2 class="h3">Requests</h2>
            </div>
            <div class="accordion mt-20 pt-5" id="accordionAbout">
                <?php foreach ($requests as $request) { ?>
                    <div class="accordion-item">
                        <button class="h5 btn btn-link btn-clean btn-dark btn-block" data-target="#collapseDesign<?php echo $request['id']?>" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseDesign<?php echo $request['id']?>">
                            <span class="accordion-item-icon">🚛</span> Request #<?php echo $request['id']?> <svg class="accordion-item-plus" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0V16" stroke="currentColor" stroke-width="1.3" />
                                <path d="M0 8H16" stroke="currentColor" stroke-width="1.3" />
                            </svg>
                        </button>
                        <div id="collapseDesign<?php echo $request['id']?>" class="collapse" data-parent="#accordionAbout">
                            <div class="collapse-content">
                                <h4 class="mb-10"><?php echo $request['book_name']?> </h4>
                                <p class="mb-0 font-size-16">Author: <?php echo $request['author']?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }
        else{ ?>
            <div class="mt-100">
                <h2 class="h3">No Requests Yet !</h2>
            </div>
        <?php } ?>
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