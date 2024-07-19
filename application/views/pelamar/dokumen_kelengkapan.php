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


                    <?php foreach ($dokumen as $dd) { ?>
                        <?php if ($dd->dok_tambahan == null) { ?>
                            <div class="alert alert-danger bg-danger text-white alert-dismissible">
                                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                <h4><i class="icon fa fa-question"></i> Perhatikan secara seksama</h4>
                                <!-- <hr style="width: 100%;"> -->
                                <p class="mr-4"> Silahkan melengkapi data dan dokumen Kelengkapan anda..</p>
                            </div>
                        <?php  } else { ?>
                            <div class="alert alert-success bg-success text-white alert-dismissible">
                                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                <h4><i class="icon fa fa-check"></i> Terima kasih</h4>
                                <!-- <hr style="width: 100%;"> -->
                                <p class="mr-4"> Silahkan melakukan lamaran sesuai dengan posisi yang anda minati pada menu LOWONGAN</p>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <div class="card">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Berkas Kelengkapan</strong></span>
                                    <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                </div> <!-- end col-->


                                <hr />
                            </div> <!-- end row -->
                            <form action="<?= base_url('curiculum_vitae/update_dok_ktp') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <?php foreach ($dokumen as $d) : ?>
                                        <?php if ($d->ktp == null) { ?>

                                        <?php } else { ?>
                                            <span class="text-success" style="text-align: right; "><b><u>Uploaded</u></b></span>
                                        <?php } ?>

                                    <?php endforeach; ?>

                                    <div class="col-lg-5">

                                        <div class="mb-3">
                                            <label class="form-label">KTP: <span class="text-danger">*</span></label>
                                            <p><span class="text-danger">* Upload KTP (.jpg maksimal 500kb)</span></p>
                                        </div>

                                        <div>
                                            <?php foreach ($dokumen as $d) : ?>
                                                <?php if ($d->ktp == null) { ?>

                                                <?php } else { ?>
                                                    <a target="blank" href="<?= base_url('upload/berkas/' . $d->ktp) ?>" class="btn btn-secondary" style="border-radius: 25px;"><i class="fa fa-eye"></i> Pratinjau File</a>
                                                <?php } ?>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <input type="file" name="ktp" class="form-control" required>

                                            <input type="hidden" name="id_akun_calon_pegawai" value="<?=
                                                                                                        $this->session->userdata('id_akun_calon_pegawai');
                                                                                                        ?>" class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px; background-color: cornflowerblue;">
                                                <i class="fa fa-upload"></i> Upload
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </form>
                            <hr>

                            <form action="<?= base_url('curiculum_vitae/update_dok_ijazah_1') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <?php foreach ($dokumen as $d) : ?>
                                        <?php if ($d->ijazah_terakhir == null) { ?>

                                        <?php } else { ?>
                                            <span class="text-success" style="text-align: right; "><b><u>Uploaded</u></b></span>
                                        <?php } ?>

                                    <?php endforeach; ?>

                                    <div class="col-lg-5">

                                        <div class="mb-3">
                                            <label class="form-label">Ijazah Terakhir: <span class="text-danger">*</span></label>
                                            <p><span class="text-danger">* Upload Ijazah Terakhir (.pdf maksimal 1 MB)</span></p>
                                        </div>

                                        <div>
                                            <?php foreach ($dokumen as $d) : ?>
                                                <?php if ($d->ijazah_terakhir == null) { ?>

                                                <?php } else { ?>
                                                    <a target="blank" href="<?= base_url('upload/berkas/' . $d->ijazah_terakhir) ?>" class="btn btn-secondary" style="border-radius: 25px;"><i class="fa fa-eye"></i> Pratinjau File</a>
                                                <?php } ?>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <input type="file" name="ijazah_terakhir" id="ijazah_terakhir" class="form-control" required>

                                            <input type="hidden" name="id_akun_calon_pegawai" value="<?=
                                                                                                        $this->session->userdata('id_akun_calon_pegawai');
                                                                                                        ?>" class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px; background-color: cornflowerblue;">
                                                <i class="fa fa-upload"></i> Upload
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>


                            <form action="<?= base_url('curiculum_vitae/update_dok_transkrip_nilai') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <?php foreach ($dokumen as $d) : ?>
                                        <?php if ($d->transkrip_nilai == null) { ?>

                                        <?php } else { ?>
                                            <span class="text-success" style="text-align: right; "><b><u>Uploaded</u></b></span>
                                        <?php } ?>

                                    <?php endforeach; ?>

                                    <div class="col-lg-5">

                                        <div class="mb-3">
                                            <label class="form-label">Transkrip Nilai: <span class="text-danger">*</span></label>
                                            <p><span class="text-danger">* Upload Transkrip Nilai (.pdf maksimal 1 MB)</span></p>
                                        </div>

                                        <div>
                                            <?php foreach ($dokumen as $d) : ?>
                                                <?php if ($d->transkrip_nilai == null) { ?>

                                                <?php } else { ?>
                                                    <a target="_blank" href="<?= base_url('upload/berkas/' . $d->transkrip_nilai) ?>" class="btn btn-secondary" style="border-radius: 25px;"><i class="fa fa-eye"></i> Pratinjau File</a>
                                                <?php } ?>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <input type="file" name="transkrip_nilai" id="transkrip_nilai" class="form-control" required>

                                            <input type="hidden" name="id_akun_calon_pegawai" value="<?=
                                                                                                        $this->session->userdata('id_akun_calon_pegawai');
                                                                                                        ?>" class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px; background-color: cornflowerblue;">
                                                <i class="fa fa-upload"></i> Upload
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <form action="<?= base_url('curiculum_vitae/update_dok_tambahan') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <?php foreach ($dokumen as $d) : ?>
                                        <?php if ($d->dok_tambahan == null) { ?>

                                        <?php } else { ?>
                                            <span class="text-success" style="text-align: right; "><b><u>Uploaded</u></b></span>
                                        <?php } ?>

                                    <?php endforeach; ?>

                                    <div class="col-lg-5">

                                        <div class="mb-3">
                                            <label class="form-label">Dokumen Tambahan: <span class="text-danger">*</span></label>
                                            <p><span class="text-danger">* Upload Sertifikat Lomba, TOEFL, Dll (.pdf maksimal 3 MB dalam 1 file berekstensi pdf)</span></p>
                                        </div>

                                        <div>
                                            <?php foreach ($dokumen as $d) : ?>
                                                <?php if ($d->dok_tambahan == null) { ?>

                                                <?php } else { ?>
                                                    <a href="<?= base_url('upload/berkas/' . $d->dok_tambahan) ?>" class="btn btn-secondary" style="border-radius: 25px;"><i class="fa fa-eye"></i> Pratinjau File</a>
                                                <?php } ?>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <input type="file" name="dok_tambahan" id="transkrip_nilai" class="form-control" required>

                                            <input type="hidden" name="id_akun_calon_pegawai" value="<?=
                                                                                                        $this->session->userdata('id_akun_calon_pegawai');
                                                                                                        ?>" class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label for=""></label>
                                        <div class="mb-1">

                                            <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px; background-color: cornflowerblue;">
                                                <i class="fa fa-upload"></i> Upload
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>


                        </div> <!-- end card body -->

                    </div> <!-- end card -->
                </div>


            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>
    <!-- content -->