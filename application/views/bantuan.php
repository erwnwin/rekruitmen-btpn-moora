<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title1; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div id="accordion1">
                <div class="card card-warning">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <a class="d-block w-100 text-white" data-toggle="collapse" href="#collapseCompany">
                                <i class="fa fa-check-circle"></i> <b>Tentang BTPN KC Makassar</b>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseCompany" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                            <center> <img src="<?= base_url('assets/images/btpn-logo.png') ?>" style="width: 100px; box-shadow: 10px; shape-outside: content-box;">
                                <img src="<?= base_url('assets/images/btpn-logo2.png') ?>" style="width: 150px; box-shadow: 10px; shape-outside: content-box; margin-left: 10px;">
                            </center>
                            <br>
                            <hr>
                            Bank Tabungan Pensiun Nasional (BTPN) KC Makassar yang terletak di Jl Bawakaraeng, Ujung Pandang merupakan salah satu cabang Bank BTPN yang mana memiliki jalur seleksi yang ketat sebelum menjadi karyawan atau pegawai pada Bank BTPN.
                        </div>
                    </div>
                </div>
            </div>

            <div id="accordion2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseAbout">
                                <i class="fa fa-check-circle"></i> <b>Tentang Aplikasi / Sistem Assesment</b>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseAbout" class="collapse" data-parent="#accordion2">
                        <div class="card-body">
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-red">Versi 1.1</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-secondary"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-calendar"></i> Waktu Rilis : Senin, 20 Mei 2023</span>
                                        <h3 class="timeline-header">Fitur yang tersedia</h3>
                                        <ul class="mt-3 mb-3">
                                            <li>Penambahan fitur edit pengguna</li>
                                            <li>Penambahan fitur edit pengguna</li>
                                            <li>Penambahan fitur edit pengguna</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>

                                <div class="time-label">
                                    <span class="bg-green">Versi 1.0</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-secondary"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-calendar"></i> Waktu Rilis : Senin, 20 Mei 2023</span>
                                        <h3 class="timeline-header">Fitur yang tersedia</h3>
                                        <ul class="mt-3 mb-3">
                                            <li>Penambahan fitur edit pengguna</li>
                                            <li>Penambahan fitur edit pengguna</li>
                                            <li>Penambahan fitur edit pengguna</li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                                <!-- <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-calendar"></i> 12:05</span>
                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="accordion3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapsePanduan">
                                    <i class="fa fa-file-download"></i> Unduh Panduan Sistem Assesment
                                </a>
                            </h4>
                        </div>
                        <div id="collapsePanduan" class="collapse" data-parent="#accordion3">
                            <div class="card-body">

                                <ul class="nav flex-column">
                                    <li class="nav-item">

                                        <div class="mailbox-attachment-info">
                                            <a target="_blank" href="<?= base_url('upload/panduan/MANUAL BOOK SISTEM ASSESMEN CALON PEGAWAI.pdf') ?>" class="mailbox-attachment-name"><i class="far fa-file-pdf"></i> Manual Book Penggunaan Sistem Assesment Calon Pegawai</a>

                                            <span class="mailbox-attachment-size clearfix">
                                                <span>1,2 Kb</span>
                                                <a href="<?= base_url('upload/panduan/MANUAL BOOK SISTEM ASSESMEN CALON PEGAWAI.pdf') ?>" class="btn btn-secondary btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                            </span>
                                        </div>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->