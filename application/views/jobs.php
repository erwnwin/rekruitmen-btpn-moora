<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/depan/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/depan/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/depan/assets/css/style.css" rel="stylesheet">


    <style>
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333333;
            transition: opacity 0.75s, visibility 0.75s;
        }

        .loader--hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader::after {
            content: "";
            width: 75px;
            height: 75px;
            border: 15px solid #dddddd;
            border-top-color: #ff7f00;
            border-radius: 50%;
            animation: loading 0.75s ease infinite;
        }

        @keyframes loading {
            from {
                transform: rotate(0turn)
            }

            to {
                transform: rotate(1turn)
            }
        }
    </style>
    <script>
        window.addEventListener("load", () => {

            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitioned", () => {
                document.body.removeChild(document.querySelector(".loader"));
            });
        });
    </script>

    <!-- =======================================================
  * Template Name: Ninestars
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="loader"></div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" alt="" class="img-fluid">&nbsp;&nbsp;</a>
                <a href="index.html"><img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo2.png" alt="" class="img-fluid ml-3"></a>
                <!-- <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url() ?>assets/depan/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="<?= base_url('home') ?>"><b>Home</b></a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('job') ?>"><b>Job Vacancies</b></a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('faq') ?>"><b>FAQ</b></a></li>
                    <li><a href="">|</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('register/register_page') ?>"><b>Register</b></a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url('login_page') ?>"><b>Login</b></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!-- <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Rekuitmen Bank Tabungan Pensiun Nasional KC Makassar</h1>
                    <h2>Terima kasih telah berpartisipasi dalam Rekuitmen BANK BTPN KC Makassar</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url() ?>assets/depan/assets/img/hero-img.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section> -->
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lowongan</h2>
                    <p>Lowongan Tersedia</p>
                </div>

                <div class="row">

                    <?php foreach ($job as $j) { ?>
                        <?php if ($j->status_job == 'open') { ?>
                            <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="info">
                                    <center>
                                        <div class="title-card">

                                            <h2> ~~ <?= $j->job ?> ~~</h2>
                                        </div>
                                    </center>
                                    <hr>
                                    <div class="address">
                                        <i class="bi bi-person"></i>
                                        <h4>Posisi : <?= $j->job ?></h4>
                                        <div class="syarat" style="margin-left: 5px;">

                                            <p> <b><?= $j->job ?></b></p>

                                        </div>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Deskripsi Pekerjaan</h4>

                                        <div class="syarat" style="margin-left: 40px;">
                                            <p><?= $j->deskripsi_job ?></p>
                                        </div>

                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Syarat Pekerjaan</h4>
                                        <div class="syarat" style="margin-left: 40px;">
                                            <p><?= $j->persyaratan ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php } ?>
                    <?php } ?>
                </div>

            </div>
        </section><!-- End Contact Us Section -->



        <!-- End Services Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3><u>BTPN KC Makassar</u></h3>
                        <p>
                            Jl. G. Bawakaraeng No.170-176, Barana, <br>
                            Kec. Makassar, Kota Makassar, Sulawesi Selatan 90145 <br>

                            <strong>Phone:</strong> 0411458585<br>
                            <strong>Website:</strong> http://www.bankbtpn.co.id/<br>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Main Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home') ?>">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('job') ?>">Job Vacancies</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('faq') ?>">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('register/register_page') ?>">Register</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('login_page') ?>">Login</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-12 col-md-12 footer-links">
                        <h4>Maps</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.802646668823!2d119.42227877409938!3d-5.135456551946305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd54c5555555%3A0x2a4edf43c6855bd0!2sBTPN%20KC%20Makassar!5e0!3m2!1sid!2sid!4v1686703552936!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>AnakIT41</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Power by <a href="https://anakit41.com/">Anak IT 41</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/depan/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/depan/assets/js/main.js"></script>

</body>

</html>