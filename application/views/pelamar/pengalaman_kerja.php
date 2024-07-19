<div class="content-page">
    <div class="content">
        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-xl-3 col-lg-4">
                    <div class="card text-center">
                        <div class="card-body" style="background-color: ghostwhite;">

                            <div class="text-start">

                                <center> <a href="<?= base_url('curiculum_vitae') ?>" class="btn btn-warning mb-2" style="border-radius: 25px; padding-left: 87px; padding-right: 87px;">
                                        Lihat CV
                                    </a></center>


                                <center> <a href="<?= base_url('curiculum_vitae') ?>" class="btn btn-info mb-2" style="border-radius: 25px; padding-left: 75px; padding-right: 75px;">
                                        Photo Profile
                                    </a></center>
                                <hr>
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-1">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/data_diri') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Data Diri <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/pendidikan') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Pendidikan <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/alamat') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Alamat <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/pengalaman_kerja') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Pengalaman Kerja
                                        </a>
                                    </li>

                                </ul>


                                <!-- 
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/skill') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Skill/Keterampilan
                                        </a>
                                    </li>

                                </ul> -->



                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/dokumen_kelengkapan') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Dokumen Kelengkapan <span class="text-danger">*</span>
                                        </a>
                                    </li>

                                </ul>





                            </div>


                        </div> <!-- end card-body -->
                    </div> <!-- end card -->



                </div> <!-- end col-->



                <div class="col-xl-9 col-lg-8">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-body">

                                <button type="button" class="btn btn-secondary mr-3 tambah-form" style="border-radius: 25px; padding-left: 25px; padding-right: 25px; float: right; ">
                                    <i class="fa fa-plus-circle"></i> Tambah Pengalaman Kerja
                                </button>

                                <!-- <button type="button" class="btn btn-info tambah-form">Tambah Form</button> -->

                            </div>
                        </div>

                        <!-- <div id="insert-form"></div> -->

                        <div id="nextkolom" name="nextkolom"></div>
                    </form>

                    <?php if ($pengalaman == null) { ?>
                        <div class="alert alert-danger bg-danger text-white alert-dismissible">
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                            <h4><i class="icon fa fa-ban"></i> Mohon diperhatikan</h4>
                            <!-- <hr style="width: 100%;"> -->
                            <p class="mr-4"> Belum ada data disini. Silahkan klik tombol Tambah Pengalaman Kerja</p>
                        </div>
                    <?php } else { ?>
                        <?php foreach ($pengalaman as $pk) { ?>
                            trhrtt
                        <?php } ?>
                    <?php } ?>


                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>
    <!-- content -->