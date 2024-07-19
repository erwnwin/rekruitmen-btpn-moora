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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/fontawesome-free/css/all.min.css">


    <!-- Sweetaler -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/animate.min.css">

    <!-- Toastr -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/toastr/toastr.min.css"> -->


    <script>
        $(window).load(function() {
            $("#ktp").change(function() {
                console.log($("#ktp option:selected").val());
                if ($("#ktp option:selected").val() == 'Tidak Ada') {
                    $('#no_ktp').prop('hidden', 'true');
                } else {
                    $('#no_ktp').prop('hidden', false);
                }
            });
        });
    </script>


    <style>
        /* #gradient4 {
            background-image: linear-gradient(to bottom right, #FFFAFA, #00ffaa);
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

        button.mbtn {
            padding: 0.6em 2em;
            border-radius: 25px;
            color: #fff;
            background-color: #1976d2;
            font-size: 1.1em;
            border: 0;
            cursor: pointer;
            margin: 1em;
        }

        button.mbtn.orange {
            background-color: #ff7f00;
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

<body id="gradient4">
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



    <main id="main">
        <!-- ======= Contact Us Section ======= -->

        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <p>Login</p>
                </div>

                <div class="row">

                    <div class="col-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">

                            <form action="<?= base_url('login_page') ?>" method="post">

                                <div class="form-group mt-3">
                                    <label for="name">Email Address</label>
                                    <input type="email" class="form-control mt-1" name="alamat_email" placeholder="Email Address" autocomplete="off" value="<?= set_value('alamat_email') ?>">
                                    <span class="text-danger"><?php echo form_error('alamat_email', '<p style="color:#F83A18">', '</p>'); ?></span>

                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                        <!-- <input type="password" id="password" class="form-control" placeholder="Insert Password" aria-label="Insert Password" aria-describedby="basic-addon2"> -->
                                        <span class="input-group-text" id="showHide">
                                            <i class="fa fa-eye" style="width: fit-content; height: fit-content;"></i>
                                        </span>

                                    </div>
                                    <span class="text-danger"><?php echo form_error('password', '<p style="color:#F83A18">', '</p>'); ?></span>

                                </div>
                                <!-- <div class="form-group row mt-3" style="background-color: #dddddd; padding-bottom: 3px;">
                                    <div class="form-group col-md-4 mb-2">
                                        <label>Captcha</label>
                                        <div>
                                            <label><?php echo $captcha_image; ?></label>
                                            <a href="" onclick="parent.window.location.reload(true)">[Perbarui Captcha]</a>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mt-md-0">
                                        <label></label>
                                        <input type="text" class="form-control" name="userCaptcha" value="<?php if (!empty($userCaptcha)) {
                                                                                                                echo $userCaptcha;
                                                                                                            } ?>" placeholder="Captcha Answer">

                                        <span class="required-server"><?php echo form_error('userCaptcha', '<p style="color:#F83A18">', '</p>'); ?></span>
                                    </div>
                                </div> -->
                                <!-- 
                                <select id="test" name="form_select" class="form-control" onchange="showDiv('hidden_div', this)">
                                    <option value="0">DisAgree</option>
                                    <option value="1">Agree</option>
                                </select>
                                <div id="hidden_div">Welcome</div> -->




                                <div class="text-center"><button class="mbtn orange" type="submit">Login Now </button></div>


                            </form>


                            <!-- <span class="float-right"><a href="<?= base_url('forgot_password') ?>"><u>Forgot Password</u></a></span><br> -->
                            <span class="float-right"><a href="<?= base_url('register/register_page') ?>"><u>Belum memiliki akun? Silahkan daftar</u></a></span><br>
                            <hr>
                            <span class="float-right"><a href="<?= base_url('backoffice/login_page') ?>"><u>Backoffice Login</u></a></span><br>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Contact Us Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



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

    <!-- Sweetalert -->
    <script src="<?= base_url() ?>/assets/js/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/myscript.js"></script>



    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/template/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/assets/template/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        function showDiv(divId, element) {
            document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
        }
    </script>


    <!-- Toastr -->
    <!-- <script src="<?= base_url() ?>/assets/template/plugins/toastr/toastr.min.js"></script> -->

    <script>
        const password = document.getElementById('password'); // id dari input password
        const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

        password.type = 'password'; // set type input password menjadi password
        showHide.innerHTML = '<i class="fa fa-eye-slash" style="width: fit-content; height: fit-content;"></i>'; // masukan icon eye dalam icon bootstrap 5
        showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
        // jadi ketika span di hover maka cursornya berubah pointer

        showHide.addEventListener('click', () => {
            // ketika span diclick
            if (password.type === 'password') {
                // jika type inputnya password
                password.type = 'text'; // ubah type menjadi text
                showHide.innerHTML = '<i class="fa fa-eye" style="width: fit-content; height: fit-content;"></i>'; // ubah icon menjadi eye slash
            } else {
                // jika type bukan password (text)
                showHide.innerHTML = '<i class="fa fa-eye-slash" style="width: fit-content; height: fit-content;"></i>'; // ubah icon menjadi eye
                password.type = 'password'; // ubah type menjadi password
            }
        });
    </script>


    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: flash
            })
        }

        var flashGagal = $('#flash-gagal').data('flash');
        if (flashGagal) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: flashGagal
            })
        }

        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
    </script>



</body>

</html>