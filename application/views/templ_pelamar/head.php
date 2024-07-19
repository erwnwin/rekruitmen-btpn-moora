<!DOCTYPE html>
<html lang="en" data-sidenav-size="sm-hover">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/temp_pelamar/assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/temp_pelamar/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="<?= base_url() ?>assets/temp_pelamar/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="<?= base_url() ?>assets/temp_pelamar/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/temp_pelamar/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/fontawesome-free/css/all.min.css">

    <!-- Sweetaler -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/js/animate.min.css">


    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/select2.min.css">

    <style>
        #gradient4 {
            background-image: linear-gradient(to bottom right, #FFFAFA, #D3D3D3);
        }

        #hidden_div {
            display: none;
        }

        #hidden_div11 {
            display: none;
        }
    </style>





</head>

<body id="gradient4">



    <!-- Begin page -->
    <div class="wrapper">



        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo2.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo2.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown d-none d-lg-block">


                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="<?= base_url() ?>assets/temp_pelamar/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="<?= base_url() ?>assets/temp_pelamar/assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">




                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="<?= base_url() ?>assets/images/user.jpg" alt="user-image" width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0 text-uppercase"><?= $user['nama_lengkap'] ?></h5>
                                <!-- <h6 class="my-0 fw-normal">Founder</h6> -->
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">

                            <!-- item-->
                            <a href="<?= base_url('my_profil') ?>" class="dropdown-item">
                                <i class="fa fa-user me-1"></i>
                                <span>My Profil</span>
                            </a>
                            <!-- item-->
                            <a href="<?= base_url('my_dashboard/logout') ?>" class="dropdown-item">
                                <i class="fa fa-power-off me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->