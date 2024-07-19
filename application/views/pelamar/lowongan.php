<div class="content-page">
    <div class="content">
        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
        <!-- Start Content-->
        <div class="container-fluid">

            <?php foreach ($dokumen as $d) { ?>
                <?php if ($d->transkrip_nilai and $d->ijazah_terakhir == null) { ?>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="alert alert-warning bg-warning text-white alert-dismissible">
                                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                <h4><i class="icon fa fa-ban"></i> Maaf data anda belum lengkap</h4>
                                <!-- <hr style="width: 100%;"> -->
                                <p class="mr-4"> Silahkan melengkapi data dan dokumen Kelengkapan anda..</p>
                            </div>

                        </div>
                    </div>
                <?php } elseif ($d->transkrip_nilai and $d->ijazah_terakhir != null) { ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title"><?= $title1; ?></h4>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($job as $j) { ?>

                        <?php foreach ($lamar as $l) { ?>
                            <div class="card">
                                <form action="<?= base_url('job_vacancy/lamar_proses') ?>" method="post">
                                    <div class="card-body">
                                        <input type="text" name="id_job" class="form-control" value="<?= $j->id_job ?>" hidden>
                                        <input type="text" name="id_akun_calon_pegawai" class="form-control" value="<?= $l->id_akun_calon_pegawai ?>" hidden>
                                        <input type="text" name="kode_alternatif" class="form-control" value="<?php echo kode_alternatif(); ?>~<?= $j->id_job ?>" hidden>
                                        <div class="row">
                                            <div class="col-sm-9 mb-2">
                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase">Posisi : <?= $j->job ?></strong></span>
                                                <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                            </div> <!-- end col-->

                                            <div class="col-sm-3">
                                                <div class="text-center mt-sm-0 mb-2 text-sm-end pull-right">

                                                </div>
                                            </div> <!-- end col-->
                                            <hr />
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="com-sm-6">
                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="fa fa-check bg-danger-lighten text-danger timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h4 class="mt-0 mb-1">Persyaratan</h4>

                                                            <p class="font-14"><?= $j->persyaratan ?></p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="timeline-item">
                                                        <i class="fa fa-check bg-danger-lighten text-danger timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h4 class="mt-0 mb-1">Deskripsi Pekerjaan</h4>
                                                            <p class="font-14"><?= $j->deskripsi_job ?></p>
                                                        </div>
                                                    </div>
                                                    <br>

                                                </div>
                                                <hr />
                                                <center><button type="submit" class="btn btn-warning" style="border-radius: 25px; padding-left: 25px; padding-right: 25px;">
                                                        Lamar
                                                    </button></center>
                                            </div>
                                        </div>

                                        <!-- end timeline -->




                                    </div> <!-- end card body -->
                                </form>
                            </div> <!-- end card -->
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>