<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/style.css">

    <style>
        #body {
            font-family: 'Nunito';
            background-color: #ffa500;
        }

        #login-card {
            width: 350px;
            border-radius: 25px;
            margin: 100px auto;

        }

        #email {
            border-radius: 30px;
            background-color: #ebf0fc;
            border-color: #ebf0fc;
            color: #9da3b0;
        }

        #button {
            border-radius: 30px;

        }

        #btn {
            position: absolute;
            bottom: -35px;
            padding: 5px;
            margin: 0px 55px;
            align-items: center;
            border-radius: 5px"

        }

        #container {
            margin-top: 25px;
        }

        .btn-circle.btn-sm {
            width: 40px;
            height: 40px;
            padding: 2px 0px;
            border-radius: 25px;
            font-size: 14px;
            text-align: center;

            margin: 8px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo">
                            <img src="<?= base_url() ?>assets/frontend/images/btpn-logo.png" alt="" style="width: 40%; margin-top: 2px; margin-left: 4px;">
                        </h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url('auth/register') ?>" class="nav-link">Registrasi</a></li>
                                <li><a href="<?= base_url('auth/login') ?>" class="nav-link btn-warning text-white">Masuk</a></li>
                                <!-- <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li> -->
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>

        <div class="site-blocks-cover overlay" style="background-image: url(<?= base_url() ?>assets/frontend/images/hero_2.jpg);" data-aos="fade" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-md-10 mt-lg-5 text-center">
                        <div id="login-card" class="card">
                            <div class="card-body">
                                <h2 class="text-center">MASUK</h2>
                                <br>
                                <form action="<?= base_url('auth/proses_login') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>

                                    </div>
                                    <button type="submit" id="button" class="btn btn-warning deep-purple btn-block ">LOGIN</button>
                                    <br>
                                    <span>Belum punya akun? <a href="<?= base_url('auth/register') ?>">Daftar Sekarang</a> </span>
                                    <br>
                                    <br>
                                </form>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                                    <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                                    <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                    <li><a href="#services-section" class="smoothscroll">Services</a></li>
                                    <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                                    <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 footer-social">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                        <form action="#" method="post" class="footer-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </footer>

    </div> <!-- .site-wrap -->

    <script src="<?= base_url() ?>assets/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery-ui.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/isotope.pkgd.min.js"></script>


    <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>


</body>

</html>