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
        /* #gradient4 {
            background-image: linear-gradient(to bottom right, #FFFAFA, #FFA07A);
        } */

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


        /* Slideshow container */
        .slideshow-container {
            max-width: 1000;
            position: relative;
            margin: auto;
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 2.5s;
            }

            @keyframes fade {
            from {opacity: 4}
            to {opacity: 1}
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



<body id="gradient4">
    <div class="loader"></div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" alt="" class="img-fluid">&nbsp;&nbsp;</a>
                <a href="index.html"><img src="<?= base_url() ?>assets/depan/assets/img/taglines-hd.jpg" alt="" class="img-fluid ml-3 mt-3"></a>
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
   <!-- Slideshow container -->
   <div>
    <br><br><br>
   </div>
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            
            <img src="<?= base_url() ?>assets/depan/assets/img/01.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
       
            <img src="<?= base_url() ?>assets/depan/assets/img/02.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="<?= base_url() ?>assets/depan/assets/img/03.jpg" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Rekruimen Bank Tabungan Pensiun Nasional KC Makassar</h1>
                    <h2>Terima kasih telah berpartisipasi dalam Rekrutmen BANK BTPN KC Makassar</h2>
                    <div>
                        <a href="#alur-pendaftaran" class="btn-get-started scrollto">Alur Pendaftaran</a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url() ?>assets/depan/assets/img/hero-img.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="<?= base_url() ?>assets/depan/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Informasi <i class="fa fa-question-circle"></i></h3>

                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Belum Mendaftar Akun</h4>
                                <p>Jika belum melakukan pendaftaran akun silahkan klik menu <strong>Register</strong>. Dan Jika telah terdaftar silahkan <strong>Login</strong> untuk mengisi persyaratan pelamar.</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Akun Telah Terdaftar</h4>
                                <p>Silahkan <strong>Login</strong> untuk melengkapi berkas pendaftaran anda. Terima kasih</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="alur-pendaftaran" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Alur Pendaftaran</h2>
                    <p>Alur Pendaftaran</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/steps/pertama.png') ?>" width="100%">
                            <hr>
                            <h4 class="title"><a href="">Pertama</a></h4>
                            <p class="description">Akses website Rekuitmen Calon Pegawai melalui tautan : <a href="http://localhost/rekruitmen-btpn.co.id/">http://localhost/rekruitmen-btpn.co.id/</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/steps/kedua.png') ?>" width="100%">
                            <hr>
                            <h4 class="title"><a href="">Kedua</a></h4>
                            <p class="description">Silahkan mengakses menu <a href="<?= base_url('register/register_page') ?>">Register</a> untuk Mendaftarkan akun menggunakan akun email dan data diri saudara/i</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/steps/ketiga.png') ?>" width="100%">
                            <hr>
                            <h4 class="title"><a href="">Ketiga</a></h4>
                            <p class="description">Setelah register akun akan ada notif atau pesan masuk ke Email untuk Verifikasi. Kemudian, klik tombol <b>Aktivasi Akun</b></p>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="<?= base_url('assets/steps/keempat.png') ?>" width="100%">
                            <hr>
                            <h4 class="title"><a href="">Keempat</a></h4>
                            <p class="description">Setelah akun telah diverifikasi maka calon pegawai Login dan melengkapi data-data yang diperlukan</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


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

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div> -->

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

    <script>
        let slideIndex = 0;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>

</body>

</html>