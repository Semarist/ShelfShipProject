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


// Prepare the SQL query to get the users who are not library owner
$sql = "SELECT * FROM users WHERE is_library_owner = 0";
$result1 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result1) > 0) {
    $users = array();
    while ($row = mysqli_fetch_assoc($result1)) {
        $users[] = $row;
    }
} else {
    $users = null;
}

// Prepare the SQL query to get the categories
$sql = "SELECT * FROM books";
$result1 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result1) > 0) {
    $books = array();
    while ($row = mysqli_fetch_assoc($result1)) {
        $books[] = $row;
    }
} else {
    $books = null;
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
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="error_popup"><?php echo $_SESSION['error']; ?></div>
    <?php } ?>
    <?php unset($_SESSION['error']); ?>

    <?php if (isset($_SESSION['success'])) { ?>
        <div class="success_popup"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
    <?php unset($_SESSION['success']); ?>
    <div class="container pt-30 pb-130 mt-n10">
        <div class="container">
            <div class="row justify-content-center text-dark">
                <div class="col-lg-10">
                    <form action="../backend/createSuggestion.php" method="post">
                        <p class="lead font-weight-medium mb-30 mt-60 pt-9">Create Suggestion.</p>
                        <div class="row gh-1 gv-3 mt-30">
                            <div class="col-12 col-md-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                <div class="mb-5">Users</div>
                                <select id="user" name="user_id" class="custom-select-dark">
                                    <?php foreach ($users as $user) { ?>
                                        <option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-12 col-md-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                <div class="mb-5">Book</div>
                                <select id="book" name="book_id" class="custom-select-dark">
                                    <?php foreach ($books as $book) { ?>
                                        <option value="<?php echo $book['id']; ?>"><?php echo $book['book_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                        <button style="color: white;background-color: #0d95e8" class="btn btn-with-ball mt-90 show-on-scroll" type="submit" name="button" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                    </form>
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