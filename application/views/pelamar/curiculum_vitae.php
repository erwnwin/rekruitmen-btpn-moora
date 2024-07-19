<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-xl-3 col-lg-4">
                    <div class="card text-center">
                        <div class="card-body" style="background-color: ghostwhite;">

                            <?php if ($data_diri == null) { ?>
                                <img src="<?= base_url() ?>assets/images/user.jpg" alt="profile-image" style="width: 70%; height: 70%; border-top-right-radius: 60px; border-bottom-left-radius: 60px;">
                                <div class="text-start mt-3">
                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;"><strong>No. KTP</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?=
                                                                                                                $this->session->userdata('no_ktp');
                                                                                                                ?></p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;"><strong>No. HP</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>
                                    <hr>
                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Tempat Lahir</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>


                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Tanggal Lahir</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Status Pernikahan</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Jenis Kelamin</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>

                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Agama</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

                                        Belum diisi</p>


                                    <hr>

                                </div> <!-- end card-body -->
                            <?php } else { ?>
                                <?php foreach ($data_diri as $d) { ?>

                                    <img src="<?= base_url() ?>assets/images/user.jpg" alt="profile-image" style="width: 70%; height: 70%; border-top-right-radius: 60px; border-bottom-left-radius: 60px;">
                                    <div class="text-start mt-3">
                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;"><strong>No. KTP</strong></span>
                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?=
                                                                                                                    $this->session->userdata('no_ktp');
                                                                                                                    ?></p>
                                        <hr>

                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;"><strong>No. HP</strong></span>
                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php if ($d->kontak == null) { ?>

                                                Belum diisi
                                            <?php } else { ?>
                                                <?= $d->kontak; ?></p>
                                    <?php } ?>
                                    <hr>
                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Tempat Lahir</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class=""><?= $d->tempat_lahir ?></p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Tanggal Lahir</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?= date_indo($d->tanggal_lahir) ?></p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Status Pernikahan</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?= $d->status_nikah ?></p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Jenis Kelamin</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?= $d->jenis_kelamin ?></p>
                                    <hr>

                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: large;">Agama</strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?= $d->agama ?></p>
                                    <hr>
                                    </div> <!-- end card-body -->
                                <?php } ?>
                            <?php } ?>


                        </div> <!-- end card -->



                    </div> <!-- end col-->
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="card">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-9">
                                    <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase"><?=
                                                                                                                                                $this->session->userdata('nama_lengkap');
                                                                                                                                                ?></strong></span>
                                    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?=
                                                                                                                                $this->session->userdata('alamat_email');
                                                                                                                                ?></p>
                                </div> <!-- end col-->

                                <div class="col-sm-3">
                                    <div class="text-center mt-sm-0 mb-2 text-sm-end pull-right">
                                        <!-- <a target="_blank" href="<?= base_url('curiculum_vitae_final/unduh/' . md5(
                                                                            $this->session->userdata('id_akun_calon_pegawai')
                                                                        )) ?>" class="btn btn-primary mb-1" style="border-radius: 25px; padding-left: 25px; padding-right: 25px;">
                                            <i class="fa fa-print"></i> Cetak CV Saya
                                        </a> -->
                                        <a href="<?= base_url('curiculum_vitae_final') ?>" class="btn btn-outline-warning mb-1" style="border-radius: 25px; padding-left: 25px; padding-right: 25px;">
                                            <i class="fa fa-edit"></i> Ubah Data
                                        </a>
                                    </div>
                                </div> <!-- end col-->
                                <hr class="text-white" style="border: 1px solid blue;">
                            </div> <!-- end row -->

                            <div class="ml-3">
                                <div class="timeline-alt pb-0">

                                    <?php if ($alamat == null) { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-1">Alamat KTP</h4>
                                                <p class="font-14">Belum ada data. Silahkan dilengkapi</p>
                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php  } else { ?>
                                        <?php foreach ($alamat as $m) : ?>
                                            <div class="timeline-item">
                                                <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                                <div class="timeline-item-info">
                                                    <h4 class="mt-0 mb-1">Alamat KTP</h4>
                                                    <p class="font-14"><?= $m->alamat_ktp ?></p>



                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <div class="ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium; text-shadow: slateblue;">Provinsi</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
                                                                    <?php foreach ($provinsi as $prov) { ?>
                                                                        <?php if ($m->provinsi == $prov->id) { ?>
                                                                            <?= $prov->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>

                                                                </p>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kabupaten/Kota</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
                                                                    <?php foreach ($kabupaten as $kab) { ?>
                                                                        <?php if ($m->kota_kab == $kab->id) { ?>
                                                                            <?= $kab->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </p>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kecamatan</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
                                                                    <?php foreach ($kecamatan as $kec) { ?>
                                                                        <?php if ($m->kecamatan == $kec->id) { ?>
                                                                            <?= $kec->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </p>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kode POS</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $m->kode_pos ?></p>

                                                                <hr>
                                                            </div>
                                                        </div>

                                                    </div> <!-- end row -->
                                                    <h4 class="mt-0 mb-1">Alamat Domisili</h4>
                                                    <p class="font-14"><?= $m->alamat_domisili ?></p>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3 ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Provinsi</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
                                                                    <?php foreach ($provinsi as $prov) { ?>
                                                                        <?php if ($m->provinsi_dom == $prov->id) { ?>
                                                                            <?= $prov->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </p>

                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3 ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kabupaten/Kota</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">

                                                                    <?php foreach ($kabupaten as $kab) { ?>
                                                                        <?php if ($m->kota_kab_dom == $kab->id) { ?>
                                                                            <?= $kab->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </p>


                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3 ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kecamatan</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">

                                                                    <?php foreach ($kecamatan as $kec) { ?>
                                                                        <?php if ($m->kecamatan_dom == $kec->id) { ?>
                                                                            <?= $kec->nama; ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </p>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3 ml-3">
                                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Kode POS</strong></span>
                                                                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $m->kode_pos_dom ?></p>
                                                                <hr>
                                                            </div>
                                                        </div>

                                                    </div> <!-- end row -->

                                                </div>
                                                <hr class="text-white" style="border: 1px solid blue;">
                                            </div>
                                        <?php endforeach; ?>

                                    <?php } ?>


                                    <?php if ($pendidikan == null) { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-1">Pendidikan Terakhir</h4>
                                                <p class="font-14">Belum ada data. Silahkan dilengkapi</p>
                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php  } else { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Pendidikan Terakhir</h4>
                                                <?php foreach ($pendidikan as $p) { ?>
                                                    <div class="timeline-item">
                                                        <i class="fa fa-circle bg-warning-lighten text-warning timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;"><?= $p->jenjang_pendidikan ?></strong></span>
                                                            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><strong>
                                                                </strong>
                                                                <?php foreach ($kampus as $a) { ?>

                                                                    <?php if ($p->asal_kampus == $a->id) { ?>
                                                                        <strong> <?= $a->nama ?>,</strong>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                <?php foreach ($kota as $k) { ?>
                                                                    <?php if ($p->kota_institusi == $k->id) { ?>
                                                                        <strong> Kota : <?= $k->nama ?></strong>
                                                                    <?php } ?>
                                                                <?php } ?>

                                                            </p>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Jenis Sekolah/ Perguruan Tinggi
                                                                            </strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->status_kampus ?></p>

                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Detail Nama Jurusan</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
                                                                            <?php foreach ($jurusan as $j) { ?>
                                                                                <?php if ($p->id_jurusan == $j->id_jurusan) { ?>
                                                                                    <?= $j->jurusan ?>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                        </p>


                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Status Lulus</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->status_lulus ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">IPK/Nilai Rata-rata Ujian Sekolah</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->ipk ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Tanggal Ijazah</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= date_indo($p->tgl_ijazah) ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>

                                                            </div> <!-- end row -->

                                                        </div>


                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php } ?>

                                    <?php if ($pengalaman == null) { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Pengalaman kerja</h4>
                                                <p class="font-14">Belum ada data. Silahkan dilengkapi</p>
                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php  } else { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Pengalaman kerja</h4>
                                                <?php foreach ($pengalaman as $p) { ?>
                                                    <div class="timeline-item">
                                                        <i class="fa fa-circle bg-warning-lighten text-warning timeline-icon"></i>
                                                        <div class="timeline-item-info">

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Nama Perusahaan / Instansi
                                                                            </strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->nama_perusahaan ?></p>

                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Jabatan / posisi</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->jabatan ?></p>


                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Status</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->status_pegawai ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Mulai Berkerja</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= date_indo($p->tgl_bekerja) ?> sd <?= date_indo($p->tgl_selesai) ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="mb-3 ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Peran dan tanggung jawab</strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->peran_tj ?></p>
                                                                        <hr>
                                                                    </div>
                                                                </div>

                                                                <hr class="text-white" style="border: 1px solid black;">
                                                            </div> <!-- end row -->

                                                        </div>


                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php } ?>



                                    <?php if ($psiko  == null) { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Nilai Psikotes dan Terulis</h4>
                                                <p class="font-14">Belum ada data. Silahkan mengikuti ujian secara online</p>
                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php  } else { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Nilai TES Anda</h4>
                                                <?php foreach ($psiko as $p) { ?>
                                                    <div class="timeline-item">
                                                        <i class="fa fa-circle bg-warning-lighten text-warning timeline-icon"></i>
                                                        <div class="timeline-item-info">

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="ml-3">
                                                                        <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: medium;">Nilai Psikotes
                                                                            </strong></span>
                                                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;"><?= $p->nilai ?></p>

                                                                        <hr>
                                                                    </div>
                                                                </div>

                                                                <!-- <hr class="text-white" style="border: 1px solid black;"> -->
                                                            </div> <!-- end row -->

                                                        </div>


                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <hr class="text-white" style="border: 1px solid blue;">
                                        </div>
                                    <?php } ?>


                                    <?php if ($dokumen == null) { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Dokumen Kelengkapan</h4>
                                                <p class="font-14">Belum ada data. Silahkan dilengkapi</p>
                                            </div>
                                        </div>
                                    <?php  } else { ?>
                                        <div class="timeline-item">
                                            <i class="fa fa-check bg-primary text-white timeline-icon" style="size: 60px;"></i>
                                            <div class="timeline-item-info">
                                                <h4 class="mt-0 mb-3">Dokumen Kelengkapan</h4>

                                                <?php foreach ($dokumen as $d) { ?>
                                                    <?php if ($d->ktp == null) { ?>

                                                    <?php } else { ?>
                                                        <div class="upload mb-1">
                                                            <div class="upload-btn">
                                                                <a class="btn btn-outline-info btn-block" style="border-radius: 25px; width:100% ; "><strong class="pull-left">KTP ~ telah diupload</strong></a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if ($d->ijazah_terakhir == null) { ?>

                                                    <?php } else { ?>
                                                        <div class="upload mb-1">
                                                            <div class="upload-btn">
                                                                <a class="btn btn-outline-info btn-block" style="border-radius: 25px; width:100% ; "><strong class="pull-left">Ijazah Terakhir ~ telah diupload</strong></a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <?php if ($d->transkrip_nilai == null) { ?>

                                                    <?php } else { ?>
                                                        <div class="upload mb-1">
                                                            <div class="upload-btn">
                                                                <a class="btn btn-outline-info btn-block" style="border-radius: 25px; width:100% ; "><strong class="pull-left">Transkrip Nilai ~ telah diupload</strong></a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                <?php } ?>

                                            </div>
                                        </div>


                                </div>
                                <!-- end timeline -->
                            <?php } ?>
                            </div>


                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->


            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>