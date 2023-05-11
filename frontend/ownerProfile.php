<?php
    include "../backend/db_conn.php";
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }

    if($_SESSION['user_type'] != 1){
        header("Location: profile.php");
    }

    //get user details from database
    $user_id = $_SESSION['id'];
    // Prepare the SQL query
    $sql = 'SELECT * FROM users WHERE id =' . $user_id;

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there is a result
    if(mysqli_num_rows($result) > 0) {
        // Retrieve the user data
        $user = mysqli_fetch_assoc($result);

    } else {
        echo "No data found for this user";
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
    <div class="container pt-130 pb-130 mt-n10">
        <div class="row gh-1 gv-1 align-items-center align-items-lg-stretch flex-column flex-lg-row">
            <div class="col-12 col-md-6 col-lg-5 shape-parent lines-style-5 order-1 show-on-scroll" data-show-duration="600" data-show-distance="10" data-show-delay="100">
                <img class="w-100 rounded-circle" src="./images/Malikslogo.png" alt="">
                <div class="shape justify-content-end">
                    <svg class="mt-n60" width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="62.5" cy="62.5" r="62.5" fill="#F5F5F5" />
                    </svg>
                </div>
                <div class="line"></div>
            </div>
            <div class="col-lg-1 d-none d-lg-block order-2 order-lg-2"></div>
            <div class="col-12 col-lg ml-lg-n30 order-4 order-lg-3 show-on-scroll" data-show-duration="600" data-show-distance="10">
                <p class="subtitle pt-30 mt-n7">Welcome</p>
                <h1 class="h2"><?php echo $user['name']?>✌️</h1>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="mb-30">Email: <strong><?php echo $user['email']?></strong></p>
                    </div>
                </div>

                <ul class="nav nav-pills nav-tabs nav-no-gap pb-7 mb-30" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="uploadBook.php" class="btn btn-dark text-white btn-with-ball mt-60">Upload Book</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="viewOrders.php" style="color: white;background-color: #60c1d6" class="btn btn-with-ball ml-20 mt-60">View Orders</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="viewRequests.php" class="btn btn-light btn-with-ball mt-60">Check Requests</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="createSuggestions.php" style="color: white;background-color: #0d95e8" class="btn btn-with-ball ml-20 mt-60">Create Suggestions</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="ownerBooks.php" style="color: white;background-color: #02578c" class="btn btn-with-ball mt-60">View My Books</a>
                    </li>
                </ul>
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