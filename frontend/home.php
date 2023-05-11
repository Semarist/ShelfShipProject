<?php

include "../backend/db_conn.php";
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
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
    <?php include "navBar.php"; ?>

    <div class="banner banner-light shape-parent">
            <div class="shape align-items-end mb-n160">
                <svg class="mb-n160" data-rellax-speed="-1" width="518" height="641" viewBox="0 0 518 641" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="197.5" cy="320.5" r="320.5" fill="#F5F5F5" />
                </svg>
            </div>
            <div class="swiper swiper-portfolio swiper-portfolio-banner container text-white" data-swiper-slides="1" data-swiper-speed="700" data-swiper-parallax="true" data-swiper-loop="true">
                <div class="swiper-container show-on-scroll" data-cursor-style="cursor-circle" data-cursor-text="view" data-show-duration="800">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="card card-portfolio card-overlay card-image-sm card-portfolio-banner text-white" href="books.php">
                                <span class="card-img swiper-image" data-swiper-parallax-x="20%">
                                    <img src="assets/images/home/h1.jpg" alt="">
                                    <span class="background-color" style="background-color: rgba(14, 14, 14, .2);"></span>
                                </span>
                                <span class="card-img-overlay">
                                    <span class="card-title h1"><span class="card-title-decoration"></span>Buy and Explore Our Books</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="card card-portfolio card-overlay card-image-sm card-portfolio-banner text-white" href="#">
                                <span class="card-img swiper-image" data-swiper-parallax-x="20%">
                                    <img src="assets/images/home/h2.jpg" alt="">
                                    <span class="background-color" style="background-color: rgba(14, 14, 14, .2);"></span>
                                </span>
                                <span class="card-img-overlay">
                                    <span class="card-title h1"><span class="card-title-decoration"></span>Manage your library</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="card card-portfolio card-overlay card-image-sm card-portfolio-banner text-white" href="books.php">
                                <span class="card-img swiper-image" data-swiper-parallax-x="20%">
                                    <img src="assets/images/home/h3.jpg" alt="">
                                    <span class="background-color" style="background-color: rgba(14, 14, 14, .2);"></span>
                                </span>
                                <span class="card-img-overlay">
                                    <span class="card-title h1"><span class="card-title-decoration"></span>View Our Books</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev d-none d-sm-flex"><svg width='26' height='11' viewBox='0 0 26 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M5.5 1L1 5.5L5.5 10' stroke='black' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                        <path d='M19 5.5H1' stroke='black' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' /></svg></div>
                <div class="swiper-button-next d-none d-sm-flex">
                    <svg width='26' height='11' viewBox='0 0 26 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M20.5 1L25 5.5L20.5 10' stroke='black' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                        <path d='M7 5.5H25' stroke='black' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="py-160">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7 text-center show-on-scroll" data-show-delay="100" data-show-duration="800">
                            <p class="subtitle mt-n10">Shelf ship</p>
                            <h1 class="h3 mb-0">Your One-Stop Shop for Online Book Purchases and Sales 👋</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center gh-5 mt-100">
                        <div class="col-lg-5 show-on-scroll" data-show-delay="200" data-show-duration="800">
                            <hr class="mt-0">
                            <p class="lead">Welcome to The Book Hub, your go-to destination for all your book-related needs!
                                Whether you're looking to buy the latest bestsellers, explore different genres, or even sell your own books, we have you covered.
                            </p>
                        </div>
                        <div class="col-lg-5 show-on-scroll" data-show-delay="300" data-show-duration="800">
                            <p>As an online bookstore, we offer a wide range of books in various categories, including fiction, non-fiction, self-help, and more. Additionally, we also offer a unique opportunity for library owners to sell their books online through our platform.</p>
                            <a href="aboutUs.php" style="background-color: #0d95e8; color: white" class="btn btn-with-ball">about us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-1">
                <div class="row gh-1 gv-1 justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="80" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="libraries.php">
                            <span class="card-img">
                                <img src="assets/images/service/web-design.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-icon"><svg width='33' height='33' viewBox='0 0 33 33' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M24.619 11.85H26.0952C27.6613 11.85 29.1632 12.5032 30.2705 13.6659C31.3779 14.8287 32 16.4057 32 18.05C32 19.6943 31.3779 21.2713 30.2705 22.4341C29.1632 23.5968 27.6613 24.25 26.0952 24.25H24.619M24.619 11.85H1V25.8C1 27.4443 1.62211 29.0213 2.72946 30.1841C3.83682 31.3468 5.33872 32 6.90476 32H18.7143C20.2803 32 21.7822 31.3468 22.8896 30.1841C23.9969 29.0213 24.619 27.4443 24.619 25.8V11.85ZM6.90476 1V5.65M12.8095 1V5.65M18.7143 1V5.65' stroke='currentColor' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                                <span class="card-title h5">Check Our Libraries</span>
                                <span class="btn btn-clean">Go now<svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="160" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="sendRequest.php">
                            <span class="card-img">
                                <img src="assets/images/service/brand-strategy.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-icon"><svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M16.5 20.0909C18.8347 20.0909 20.7273 18.2593 20.7273 16C20.7273 13.7407 18.8347 11.9091 16.5 11.9091C14.1653 11.9091 12.2727 13.7407 12.2727 16C12.2727 18.2593 14.1653 20.0909 16.5 20.0909Z' stroke='currentColor' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M26.9273 20.0909C26.7397 20.5022 26.6837 20.9584 26.7666 21.4008C26.8495 21.8432 27.0674 22.2513 27.3923 22.5727L27.4768 22.6545C27.7388 22.9078 27.9467 23.2086 28.0885 23.5397C28.2304 23.8708 28.3034 24.2257 28.3034 24.5841C28.3034 24.9425 28.2304 25.2974 28.0885 25.6285C27.9467 25.9596 27.7388 26.2603 27.4768 26.5136C27.2151 26.7672 26.9043 26.9684 26.5621 27.1056C26.22 27.2429 25.8533 27.3135 25.483 27.3135C25.1126 27.3135 24.7459 27.2429 24.4038 27.1056C24.0616 26.9684 23.7508 26.7672 23.4891 26.5136L23.4045 26.4318C23.0725 26.1174 22.6507 25.9066 22.1936 25.8264C21.7365 25.7462 21.265 25.8003 20.84 25.9818C20.4232 26.1547 20.0678 26.4417 19.8174 26.8075C19.5671 27.1734 19.4327 27.6021 19.4309 28.0409V28.2727C19.4309 28.996 19.134 29.6897 18.6055 30.2012C18.077 30.7127 17.3602 31 16.6127 31C15.8653 31 15.1485 30.7127 14.62 30.2012C14.0915 29.6897 13.7945 28.996 13.7945 28.2727V28.15C13.7836 27.6986 13.6327 27.2609 13.3613 26.8937C13.0899 26.5265 12.7106 26.2468 12.2727 26.0909C11.8477 25.9094 11.3763 25.8552 10.9192 25.9354C10.4621 26.0157 10.0403 26.2265 9.70818 26.5409L9.62364 26.6227C9.3619 26.8763 9.05109 27.0775 8.70897 27.2147C8.36685 27.352 8.00013 27.4226 7.62977 27.4226C7.25942 27.4226 6.8927 27.352 6.55058 27.2147C6.20846 27.0775 5.89764 26.8763 5.63591 26.6227C5.37388 26.3694 5.16602 26.0687 5.0242 25.7376C4.88237 25.4065 4.80937 25.0516 4.80937 24.6932C4.80937 24.3348 4.88237 23.9799 5.0242 23.6488C5.16602 23.3177 5.37388 23.0169 5.63591 22.7636L5.72045 22.6818C6.0453 22.3604 6.26322 21.9523 6.3461 21.5099C6.42898 21.0675 6.37303 20.6113 6.18545 20.2C6.00683 19.7967 5.71025 19.4527 5.3322 19.2104C4.95416 18.9681 4.51115 18.8381 4.05773 18.8364H3.81818C3.07075 18.8364 2.35394 18.549 1.82543 18.0376C1.29691 17.5261 1 16.8324 1 16.1091C1 15.3858 1.29691 14.6921 1.82543 14.1806C2.35394 13.6692 3.07075 13.3818 3.81818 13.3818H3.945C4.4114 13.3713 4.86373 13.2252 5.24319 12.9625C5.62265 12.6999 5.91169 12.3328 6.07273 11.9091C6.2603 11.4978 6.31625 11.0416 6.23337 10.5992C6.15049 10.1568 5.93257 9.74865 5.60773 9.42727L5.52318 9.34545C5.26116 9.09216 5.05329 8.79138 4.91147 8.46029C4.76964 8.12921 4.69665 7.77431 4.69665 7.41591C4.69665 7.0575 4.76964 6.70261 4.91147 6.37153C5.05329 6.04044 5.26116 5.73965 5.52318 5.48636C5.78491 5.23279 6.09573 5.03163 6.43785 4.89438C6.77997 4.75713 7.14669 4.68649 7.51705 4.68649C7.8874 4.68649 8.25412 4.75713 8.59624 4.89438C8.93836 5.03163 9.24918 5.23279 9.51091 5.48636L9.59545 5.56818C9.92755 5.88255 10.3493 6.09343 10.8064 6.17364C11.2635 6.25385 11.735 6.1997 12.16 6.01818H12.2727C12.6895 5.84532 13.0449 5.5583 13.2953 5.19245C13.5457 4.8266 13.68 4.39789 13.6818 3.95909V3.72727C13.6818 3.00396 13.9787 2.31026 14.5072 1.7988C15.0358 1.28734 15.7526 1 16.5 1C17.2474 1 17.9642 1.28734 18.4928 1.7988C19.0213 2.31026 19.3182 3.00396 19.3182 3.72727V3.85C19.32 4.2888 19.4543 4.71751 19.7047 5.08336C19.9551 5.44921 20.3105 5.73623 20.7273 5.90909C21.1523 6.09061 21.6237 6.14476 22.0808 6.06455C22.5379 5.98434 22.9597 5.77346 23.2918 5.45909L23.3764 5.37727C23.6381 5.1237 23.9489 4.92254 24.291 4.78529C24.6332 4.64804 24.9999 4.5774 25.3702 4.5774C25.7406 4.5774 26.1073 4.64804 26.4494 4.78529C26.7915 4.92254 27.1024 5.1237 27.3641 5.37727C27.6261 5.63056 27.834 5.93135 27.9758 6.26244C28.1176 6.59352 28.1906 6.94841 28.1906 7.30682C28.1906 7.66522 28.1176 8.02012 27.9758 8.3512C27.834 8.68229 27.6261 8.98307 27.3641 9.23636L27.2795 9.31818C26.9547 9.63956 26.7368 10.0477 26.6539 10.4901C26.571 10.9325 26.627 11.3887 26.8145 11.8V11.9091C26.9932 12.3124 27.2898 12.6564 27.6678 12.8987C28.0458 13.141 28.4888 13.271 28.9423 13.2727H29.1818C29.9292 13.2727 30.6461 13.5601 31.1746 14.0715C31.7031 14.583 32 15.2767 32 16C32 16.7233 31.7031 17.417 31.1746 17.9285C30.6461 18.4399 29.9292 18.7273 29.1818 18.7273H29.055C28.6016 18.729 28.1586 18.859 27.7805 19.1013C27.4025 19.3436 27.1059 19.6876 26.9273 20.0909Z' stroke='currentColor' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                                <span class="card-title h5">Request Your Book</span>
                                <span class="btn btn-clean">Read More<svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="240" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="books.php">
                            <span class="card-img">
                                <img src="assets/images/service/packaging.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-icon"><svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M16.5 10C19.0681 10 21.15 7.98528 21.15 5.5C21.15 3.01472 19.0681 1 16.5 1C13.9319 1 11.85 3.01472 11.85 5.5C11.85 7.98528 13.9319 10 16.5 10ZM16.5 10V31M16.5 31C12.3891 31 8.44666 29.4196 5.53984 26.6066C2.63303 23.7936 1 19.9782 1 16H5.65M16.5 31C20.6109 31 24.5533 29.4196 27.4602 26.6066C30.367 23.7936 32 19.9782 32 16H27.35' stroke='currentColor' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                                <span class="card-title h5">Discover The Genres</span>
                                <span class="btn btn-clean">Discover Now<svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="320" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="books.php">
                            <span class="card-img">
                                <img src="assets/images/service/content-production.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-icon"><svg width='34' height='31' viewBox='0 0 34 31' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M17 7.44444C17 5.73527 16.3257 4.0961 15.1255 2.88753C13.9253 1.67897 12.2974 1 10.6 1H1V25.1667H12.2C13.473 25.1667 14.6939 25.6759 15.5941 26.5823C16.4943 27.4887 17 28.7181 17 30M17 7.44444V30M17 7.44444C17 5.73527 17.6743 4.0961 18.8745 2.88753C20.0747 1.67897 21.7026 1 23.4 1H33V25.1667H21.8C20.527 25.1667 19.3061 25.6759 18.4059 26.5823C17.5057 27.4887 17 28.7181 17 30' stroke='currentColor' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                                <span class="card-title h5">View Our Latest Books</span>
                                <span class="btn btn-clean">View All<svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' /></svg></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pt-160 pb-130">
                    <h2 class="text-center mb-100 mt-n10">What’s new?</h2>
                    <div class="row gh-1 gv-4 pb-30">

                        <div class="col-12 col-sm-6 col-lg-4 show-on-scroll" data-show-delay="100" data-show-duration="500" data-show-distance="20">
                            <a class="card card-blog card-vertical">
                                <span class="card-img">
                                    <img src="images/img1.jpg" alt="">
                                </span>
                                <span class="card-body">
                                    <span class="card-title h5">Office explained in fewer than 100+ Characters</span>
                                    <span class="card-date">12 may, 2020</span>
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 show-on-scroll" data-show-delay="200" data-show-duration="500" data-show-distance="20">
                            <a class="card card-blog card-vertical">
                                <span class="card-img">
                                    <img src="images/img.jpeg" alt="">
                                </span>
                                <span class="card-body">
                                    <span class="card-title h5">This week&#39;s top Stories about Development</span>
                                    <span class="card-date">08 may, 2020</span>
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 show-on-scroll" data-show-delay="300" data-show-duration="500" data-show-distance="20">
                            <a class="card card-blog card-vertical">
                                <span class="card-img">
                                    <img src="images/img3.jpg" alt="">
                                </span>
                                <span class="card-body">
                                    <span class="card-title h5">Facts about Sciences that you never knew</span>
                                    <span class="card-date">05 may, 2020</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pt-60 mt-n8">
                        <a href="books.php" style="color: white;background-color: #0d95e8" class="btn btn-with-ball">all books</a>
                    </div>
                </div>
            </div>
            <div class="py-160 mt-n8 shape-parent bg-light overflow-hidden">
                <div class="shape justify-content-end mt-n160">
                    <svg class="mt-n160" data-rellax-speed="-1" width="415" height="641" viewBox="0 0 415 641" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="320.5" cy="320.5" r="310.5" fill="#60c1d6" />
                    </svg>
                </div>
                <div class="container">
                    <h2 class="mb-100 mt-n10" style="color: #03578c">Work process</h2>
                    <div class="row gh-1 gv-5">
                        <div class="col-12 col-lg-4">
                            <ul class="nav nav-opacity nav-tabs nav-gap-md flex-column" style="color: #03578c" id="workTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="idea-tab" data-toggle="tab" href="#idea" role="tab" aria-controls="idea" aria-selected="true">Search an Item<span class="badge">01</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Order<span class="badge">02</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false">Receive You Book<span class="badge">03</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="release-tab" data-toggle="tab" href="#release" role="tab" aria-controls="release" aria-selected="false">Enjoy it<span class="badge">04</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="tab-content mr-n30" style="color: #03578c" id="workTabContent">
                                <div class="tab-pane fade show active" id="idea" role="tabpanel" aria-labelledby="idea-tab">
                                    <div class="row gh-5 gv-5">
                                        <div class="col-md">
                                            <p>Our website offers a user-friendly search feature that allows you to quickly and easily find the books you're looking for. You can search by title, author, or keyword to narrow down your options and find the perfect book for you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                                    <div class="row gh-5 gv-5">
                                        <div class="col-md">
                                            <p>Our ordering process is simple and straightforward, and you can complete it in just a few clicks. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                                    <div class="row gh-5 gv-5">
                                        <div class="col-md">
                                            <p>We offer fast and reliable shipping options, so you can receive your book as soon as possible. We also provide tracking information, so you can track your order and know when to expect it.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="release" role="tabpanel" aria-labelledby="release-tab">
                                    <div class="row gh-5 gv-5">
                                        <div class="col-lg">
                                            <p>Once you have received your book, it's time to enjoy it! Whether you're looking for a thrilling adventure, a thought-provoking read, or a self-help book to inspire and motivate you, we have something for everyone. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-160 pb-130 mb-6">
                <div class="container">
                    <div class="row gh-1 gv-1 justify-content-xl-end">
                        <div class="col-lg-5 show-on-scroll" data-show-duration="600">
                            <img class="w-100" src="assets/images/service/service-1-940-580.jpg" alt="">
                        </div>
                        <div class="d-none d-lg-block col-1 order-lg-1"></div>
                        <div class="col-lg-6 col-xl-4 align-self-center order-11 order-lg-2">
                            <h2 class="h3 mt-30 mt-lg-0 mt-xl-0 mb-0">Our Book Collection 🔥</h2>
                        </div>
                        <div class="d-none d-xl-block col-2 order-lg-3"></div>
                        <div class="d-none d-lg-block col-lg-2 col-xl-auto order-10 order-lg-4 show-on-scroll" data-show-delay="100" data-show-duration="600">
                            <img class="mw-100" width="140" src="assets/images/service/service-2-280-280.jpg" alt="">
                        </div>
                        <div class="d-none d-lg-block col-lg-3 order-9 order-lg-5 show-on-scroll" data-show-delay="200" data-show-duration="600">
                            <img class="w-100" src="assets/images/service/service-3-540-500.jpg" alt="">
                        </div>
                        <div class="d-none d-lg-block col-1 order-lg-6"></div>
                        <div class="col-lg-6 col-xl-5 mt-xl-n60 order-12 order-lg-7">
                            <p>At The Book Hub, we pride ourselves on having an extensive book collection that caters to all reading interests. Our inventory is regularly updated with the latest releases, so you can be sure to find the newest books on our site. In addition, we also offer rare and hard-to-find titles that are not easily available elsewhere. We have everything from classic literature to modern bestsellers, and we're sure you'll find something that piques your interest.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-160">
                <div class="container">
                    <h2 class="display-4 mb-60 pb-30 text-center">Values</h2>
                    <div class="swiper mt-n4" data-swiper-slides="3" data-swiper-breakpoints="828:1, 1024:2" data-swiper-gap="60" data-swiper-free="true" data-swiper-grabCursor="true" data-swiper-freeMode="true">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feature">
                                        <div class="feature-icon"><svg width='71' height='70' viewBox='0 0 71 70' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M5.18911 17.7887L35 0.57735L64.8109 17.7887V52.2113L35 69.4226L5.18911 52.2113V17.7887Z' stroke='currentColor' />
                                                <path d='M18.2867 65.3084L1.0754 35.4976L18.2867 5.68667H52.7094L69.9207 35.4976L52.7094 65.3084H18.2867Z' stroke='currentColor' /></svg><svg width='18' height='25' viewBox='0 0 18 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M13.3323 14.4715C15.5391 13.1686 17 10.8995 17 8.31818C17 4.27646 13.4183 1 9 1C4.58172 1 1 4.27646 1 8.31818C1 12.3599 4.58172 15.6364 9 15.6364C10.5965 15.6364 12.0838 15.2086 13.3323 14.4715ZM13.3323 14.4715L14.7143 24L9 20.8636L3.28571 24L4.66857 14.4759M13.3323 14.4715L13.3314 14.4655' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' /></svg></div>
                                        <div class="feature-body">
                                            <h4 class="feature-title">Excellent Quality</h4>
                                            <p class="feature-text">We believe that everyone should have access to great books at affordable prices..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feature">
                                        <div class="feature-icon"><svg width='71' height='70' viewBox='0 0 71 70' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M5.18911 17.7887L35 0.57735L64.8109 17.7887V52.2113L35 69.4226L5.18911 52.2113V17.7887Z' stroke='currentColor' />
                                                <path d='M18.2867 65.3084L1.0754 35.4976L18.2867 5.68667H52.7094L69.9207 35.4976L52.7094 65.3084H18.2867Z' stroke='currentColor' /></svg><svg width='23' height='23' viewBox='0 0 23 23' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M1 18.5V11.5C1 8.71523 2.10625 6.04451 4.07538 4.07538C6.04451 2.10625 8.71523 1 11.5 1C14.2848 1 16.9555 2.10625 18.9246 4.07538C20.8938 6.04451 22 8.71523 22 11.5V18.5M22 19.6667C22 20.2855 21.7542 20.879 21.3166 21.3166C20.879 21.7542 20.2855 22 19.6667 22H18.5C17.8812 22 17.2877 21.7542 16.8501 21.3166C16.4125 20.879 16.1667 20.2855 16.1667 19.6667V16.1667C16.1667 15.5478 16.4125 14.9543 16.8501 14.5168C17.2877 14.0792 17.8812 13.8333 18.5 13.8333H22V19.6667ZM1 19.6667C1 20.2855 1.24583 20.879 1.68342 21.3166C2.121 21.7542 2.71449 22 3.33333 22H4.5C5.11884 22 5.71233 21.7542 6.14992 21.3166C6.5875 20.879 6.83333 20.2855 6.83333 19.6667V16.1667C6.83333 15.5478 6.5875 14.9543 6.14992 14.5168C5.71233 14.0792 5.11884 13.8333 4.5 13.8333H1V19.6667Z' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' /></svg></div>
                                        <div class="feature-body">
                                            <h4 class="feature-title">Customer Service</h4>
                                            <p class="feature-text">We take pride in providing exceptional customer service to all of our customers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feature">
                                        <div class="feature-icon"><svg width='71' height='70' viewBox='0 0 71 70' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M5.18911 17.7887L35 0.57735L64.8109 17.7887V52.2113L35 69.4226L5.18911 52.2113V17.7887Z' stroke='currentColor' />
                                                <path d='M18.2867 65.3084L1.0754 35.4976L18.2867 5.68667H52.7094L69.9207 35.4976L52.7094 65.3084H18.2867Z' stroke='currentColor' /></svg><svg width='24' height='21' viewBox='0 0 24 21' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M21.3036 2.67974C20.766 2.14721 20.1278 1.72477 19.4253 1.43656C18.7228 1.14834 17.9699 1 17.2095 1C16.4491 1 15.6961 1.14834 14.9936 1.43656C14.2912 1.72477 13.6529 2.14721 13.1153 2.67974L11.9997 3.7844L10.8841 2.67974C9.79827 1.60458 8.32556 1.00056 6.78997 1.00056C5.25437 1.00056 3.78167 1.60458 2.69584 2.67974C1.61001 3.7549 1 5.21313 1 6.73364C1 8.25415 1.61001 9.71238 2.69584 10.7875L11.9997 20L21.3036 10.7875C21.8414 10.2553 22.268 9.62328 22.5591 8.9277C22.8502 8.23212 23 7.48657 23 6.73364C23 5.98071 22.8502 5.23516 22.5591 4.53958C22.268 3.84399 21.8414 3.21201 21.3036 2.67974Z' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' /></svg></div>
                                        <div class="feature-body">
                                            <h4 class="feature-title">The best People</h4>
                                            <p class="feature-text">We believe that the key to our success is our people.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feature">
                                        <div class="feature-icon"><svg width='71' height='70' viewBox='0 0 71 70' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M5.18911 17.7887L35 0.57735L64.8109 17.7887V52.2113L35 69.4226L5.18911 52.2113V17.7887Z' stroke='currentColor' />
                                                <path d='M18.2867 65.3084L1.0754 35.4976L18.2867 5.68667H52.7094L69.9207 35.4976L52.7094 65.3084H18.2867Z' stroke='currentColor' /></svg><svg width='26' height='26' viewBox='0 0 26 26' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path d='M13 1V3.18182M13 22.8182V25M4.51273 4.51273L6.06182 6.06182M19.9382 19.9382L21.4873 21.4873M1 13H3.18182M22.8182 13H25M4.51273 21.4873L6.06182 19.9382M19.9382 6.06182L21.4873 4.51273M18.4545 13C18.4545 16.0125 16.0125 18.4545 13 18.4545C9.98754 18.4545 7.54545 16.0125 7.54545 13C7.54545 9.98754 9.98754 7.54545 13 7.54545C16.0125 7.54545 18.4545 9.98754 18.4545 13Z' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' /></svg></div>
                                        <div class="feature-body">
                                            <h4 class="feature-title">Creative Ideas</h4>
                                            <p class="feature-text">We're always looking for new and creative ideas to improve our service and provide the best possible experience for our customers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer bg-dark text-white shape-parent overflow-hidden py-130">
            <div class="shape align-items-end justify-content-end">
                <svg data-rellax-speed="-1" class="mb-n130" width="525" height="641" viewBox="0 0 525 641" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="320.5" cy="320.5" r="320.5" fill=" #202020" />
                </svg>
            </div>
            <div class="container mb-n5">
                <div class="row justify-content-between mb-100 gh-1 gv-4">
                    <div class="col-lg-3">
                        <a href="home.php" class="d-block mb-30">
                            <img width="184" src="images/logo.svg" alt="">
                        </a>
                        <p class="mb-0">committed to providing high-quality books at affordable prices. We believe in the power of books to inspire, educate, and entertain.</p>
                    </div>
                    <div class="d-none d-lg-block col-2"></div>
                    <div class="d-none d-lg-block col-1"></div>
                </div>
                <div class="row justify-content-between gh-1 gv-4 mb-30">
                    <div class="col-lg-3">
                        <ul class="nav flex-column text-white">
                            <li class="nav-item">
                                <a href="callto:+1202-358-0309" class="nav-link">+1 202-358-0309</a>
                            </li>
                            <li class="nav-item">
                                <a href="mailto:hello@themebau.com?subject=Test%20Address%20Email" class="nav-link">hello@shelfship.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-none d-lg-block col-2"></div>
                    <div class="col-12 col-lg-6">
                        <div class="row gh-1 gv-1">
                            <div class="col-12 col-lg-4">
                                <ul class="nav flex-column text-white">
                                    <li class="nav-item">
                                        <a href="aboutUs.php" class="nav-link">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="books.php" class="nav-link">Our Books</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-1"></div>
                </div>
                <div class="row justify-content-between mt-100 mt-lg-0">
                    <div class="col-auto">
                        <ul class="nav text-white align-items-center">
                            <li class="nav-item">
                                <a href="https://facebook.com/runwebrun" class="nav-link">
                                    <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.17421 3.65234H9.99996V0.154687C9.68557 0.107422 8.60224 0 7.34088 0C4.70831 0 2.90529 1.82188 2.90529 5.16914V8.25H0V12.1602H2.90529V22H6.46588V12.1602H9.25375L9.69693 8.25H6.46588V5.55586C6.46588 4.42578 6.7424 3.65234 8.17421 3.65234Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://twitter.com/runwebrun" class="nav-link">
                                    <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.0706 5.51356C22.086 5.73504 22.086 5.95656 22.086 6.17804C22.086 12.9334 17.0783 20.7172 7.92575 20.7172C5.10601 20.7172 2.48661 19.8787 0.283203 18.4232C0.683835 18.4707 1.069 18.4865 1.48505 18.4865C3.81167 18.4865 5.95347 17.6797 7.6638 16.3033C5.47581 16.2558 3.64221 14.7845 3.01046 12.7594C3.31865 12.8069 3.6268 12.8385 3.9504 12.8385C4.39723 12.8385 4.84411 12.7752 5.2601 12.6645C2.97968 12.1898 1.2693 10.1332 1.2693 7.64935V7.58609C1.93183 7.96579 2.70231 8.20309 3.5189 8.2347C2.17837 7.31709 1.30013 5.75086 1.30013 3.97894C1.30013 3.02972 1.54661 2.15959 1.97807 1.40019C4.42801 4.50103 8.11063 6.52604 12.24 6.74756C12.163 6.36787 12.1168 5.97239 12.1168 5.57687C12.1168 2.76076 14.3356 0.466797 17.0937 0.466797C18.5266 0.466797 19.8209 1.0838 20.73 2.0805C21.8548 1.85902 22.9334 1.43184 23.8887 0.846495C23.5189 2.03307 22.7331 3.02977 21.7008 3.66255C22.7023 3.55186 23.673 3.26702 24.5667 2.87155C23.8888 3.88403 23.0413 4.78577 22.0706 5.51356Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://instagram.com/runwebrun" class="nav-link">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2827 5.3166C8.24087 5.3166 5.78732 7.8148 5.78732 10.912C5.78732 14.0092 8.24087 16.5074 11.2827 16.5074C14.3245 16.5074 16.7781 14.0092 16.7781 10.912C16.7781 7.8148 14.3245 5.3166 11.2827 5.3166ZM11.2827 14.5497C9.31698 14.5497 7.70998 12.9183 7.70998 10.912C7.70998 8.90563 9.3122 7.27425 11.2827 7.27425C13.2532 7.27425 14.8554 8.90563 14.8554 10.912C14.8554 12.9183 13.2484 14.5497 11.2827 14.5497ZM18.2846 5.08772C18.2846 5.81331 17.7107 6.39282 17.0029 6.39282C16.2902 6.39282 15.7211 5.80844 15.7211 5.08772C15.7211 4.36699 16.295 3.78261 17.0029 3.78261C17.7107 3.78261 18.2846 4.36699 18.2846 5.08772ZM21.9243 6.4123C21.843 4.66404 21.4508 3.11545 20.1929 1.83956C18.9399 0.563678 17.419 0.164355 15.7019 0.0766992C13.9323 -0.0255664 8.62827 -0.0255664 6.85865 0.0766992C5.14643 0.159486 3.62552 0.558809 2.36766 1.83469C1.10979 3.11058 0.722392 4.65917 0.636302 6.40743C0.535865 8.20925 0.535865 13.6098 0.636302 15.4117C0.717609 17.1599 1.10979 18.7085 2.36766 19.9844C3.62552 21.2603 5.14165 21.6596 6.85865 21.7473C8.62827 21.8495 13.9323 21.8495 15.7019 21.7473C17.419 21.6645 18.9399 21.2652 20.1929 19.9844C21.446 18.7085 21.8382 17.1599 21.9243 15.4117C22.0247 13.6098 22.0247 8.21412 21.9243 6.4123ZM19.6381 17.345C19.2651 18.2995 18.5429 19.0348 17.6007 19.4195C16.1898 19.9893 12.8419 19.8578 11.2827 19.8578C9.72352 19.8578 6.37081 19.9844 4.96469 19.4195C4.02727 19.0397 3.30507 18.3043 2.92724 17.345C2.36766 15.9084 2.49679 12.4995 2.49679 10.912C2.49679 9.32443 2.37244 5.91071 2.92724 4.47899C3.30029 3.52451 4.02248 2.78917 4.96469 2.40446C6.37559 1.83469 9.72352 1.96618 11.2827 1.96618C12.8419 1.96618 16.1946 1.83956 17.6007 2.40446C18.5381 2.7843 19.2603 3.51964 19.6381 4.47899C20.1977 5.91558 20.0686 9.32443 20.0686 10.912C20.0686 12.4995 20.1977 15.9133 19.6381 17.345Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <div class="footer-copyright">© 2023 - shelf ship.</div>
                    </div>
                </div>
            </div>
        </footer>
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