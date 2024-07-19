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
            <?= $this->session->flashdata('message'); ?>

            <?php echo $this->session->flashdata('pesan') ?>

            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


            <!-- <div class="callout callout-success shadow bg-success">

                <p>Silahkan klik Tombol di bawah untuk membuat soal PSIKOTES dan TERTULIS</p>
            </div> -->
            <!-- 
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= base_url('bank_soal/psikotes') ?>" class="btn btn-flat btn-block btn-info"><i class="fa fa-file-alt"></i> Soal Psikotes</a>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('bank_soal/tertulis') ?>" class="btn btn-flat btn-block btn-primary"><i class="fa fa-file-alt"></i> Soal Tertulis</a>
                </div>
            </div>
            <br> -->
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <div class="card-tools">
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="get" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih Jabatan/posisi</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="id_lowongan" style="width: 100%;" required>
                                        <option selected="selected" disabled="">Pilih Jabatan</option>
                                        <?php foreach ($job as $s) { ?>
                                            <option value="<?= $s->id_job ?>"><?= $s->job; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="<?= base_url('hasil_penilaian'); ?>" class="btn btn-default btn-flat btn-sm"><span class="fa fa-refresh"></span> Refresh</a>
                                    <button type="submit" class="btn btn-primary btn-flat btn-sm" title="Filter Data Soal Ujian"><span class="fa fa-filter"></span> Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                        </div>
                        <!-- /.box-footer -->
                    </form>

                </div>
            </div>

            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Daftar Calon Pegawai yang Masuk Kualifikasi</h3>

                    <div class="card-tools">
                        <!-- <a href="<?= base_url('bank_soal/tambah_soal') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Soal</button></a> -->
                    </div>
                </div>

                <div class="card-body">
                    <table id="data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th width="50%">Nama Lengkap Calon Pegawai</th>
                                <th width="13%">Nilai Optimasi</th>
                                <th width="13%">Rangking</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($hasil as $d) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>

                                    <td style="text-transform: capitalize;"><?php echo $d->nama_lengkap; ?></td>

                                    <td><?php echo $d->nilai_optimasi; ?></td>
                                    <td><?php echo $d->rank; ?></td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-kirim-pesan<?= $d->id_akun_calon_pegawai ?>"><span class="fa fa-check" title="Kirimi Email Notifikasi"></span> Kirim Email Notifikasi</button>
                                            <button type="button" class="btn btn-primary btn-xs btn-flat btn-sm" data-toggle="modal" data-target="#modal-cv<?= $d->id_akun_calon_pegawai ?>"><i class="fa fa-eye"></i> Preview CV

                                        </center>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Edit -->

<?php foreach ($pesan as $p) { ?>
    <div class="modal fade" id="modal-kirim-pesan<?= $p->id_akun_calon_pegawai ?>">
        <form action="<?= base_url('coba/kirim_pesan') ?>" method="post">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Kirim pesan ke Pelamar</h4>
                    </div>
                    <div class="modal-body table-responsive">
                        <div class="card-body">

                            <center>
                                <p>Yakin mengirim pesan?</p>
                            </center>
                            <input type="hidden" class="form-control" name="id_akun_calon_pegawai" value="<?= $p->id_akun_calon_pegawai ?>">
                            <input type="hidden" class="form-control" name="alamat_email" value="<?= $p->alamat_email ?>">
                            <input type="hidden" class="form-control" name="nama_lengkap" value="<?= $p->nama_lengkap ?>">
                            <textarea name="pesan" class="form-control" cols="5" rows="5" readonly hidden>Hai, Saudara/i <?= $p->nama_lengkap ?>. SELAMAT, Saudara/i dinyatakan LULUS dalam Seleksi Calon Pegawai BTPN KC Makassar. Pada Posisi TELLER BTPN KC Makassar</textarea>

                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check-circle"></i> Kirim</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
        </form>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>




<?php foreach ($cv as $c) { ?>
    <div class="modal fade" id="modal-cv<?= $c->id_akun_calon_pegawai ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: cornflowerblue;">

                    <h4 class="modal-title text-white">Preview CV : <?= $c->nama_lengkap ?></h4>

                </div>
                <div class="modal-body table-responsive">
                    <div class="card-body">
                        <div class="timeline">
                            <!-- timeline time label -->

                            <div class="time-label">
                                <span class="bg-blue">Data Diri : <?= $c->nama_lengkap ?></span>
                            </div>

                            <div>
                                <i class="fas fa-check bg-secondary"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header">Data Diri Saudara/i : <?= $c->nama_lengkap ?></h3>

                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Nama Lengkap</th>
                                                <td style='width: 900px'><?= $c->nama_lengkap ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>No. KTP</th>
                                                <td style='width: 900px'><?= $c->no_ktp ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Email</th>
                                                <td style='width: 900px'><?= $c->alamat_email ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Tempat Tanggal Lahir</th>
                                                <td style='width: 900px'><?= $c->tempat_lahir ?>, <?= date_indo($c->tanggal_lahir) ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Agama</th>
                                                <td style='width: 900px'><?= $c->agama ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Status Pernikahan</th>
                                                <td style='width: 900px'><?= $c->status_nikah ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <th style='width: 300px'>Hak Akses</th>
                                                <?php if ($this->session->userdata('role_id') == '1') { ?>
                                                    <td><span class="badge badge-danger">Pimpinan</span></td>
                                                <?php } else if ($this->session->userdata('role_id') == '2') { ?>
                                                    <td><span class="badge badge-info">HRD</span></td>
                                                <?php } ?>
                                            </tr> -->
                                            <!-- <tr>
                                                <th style='width: 300px'>#</th>
                                                <td style='width: 900px'>
                                                    <a href="<?= base_url(
                                                                    'profil/ubah_password/' .
                                                                        $this->session->userdata('id_akun_pengguna')
                                                                ) ?>" class="btn btn-sm btn-flat btn-success"><i class="fa fa-lock"></i> Ubah Password</a>
                                                    <a href="<?= base_url('profil/ubah_profil/' . $this->session->userdata('id_akun_pengguna')) ?>" class="btn btn-sm btn-flat btn-warning text-white"><i class="fa fa-edit"></i> Ubah Profil</a>
                                                </td>
                                            </tr> -->


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>

                                    <hr>
                                </div>
                            </div>

                            <div class="time-label">
                                <span class="bg-red">Alamat : <?= $c->nama_lengkap ?></span>
                            </div>

                            <div>
                                <i class="fas fa-check bg-secondary"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header"><strong>Alamat KTP</strong></h3>
                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Alamat KTP</th>
                                                <td style='width: 900px'><?= $c->alamat_ktp ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'></th>
                                                <td style='width: 900px'><?= $c->nama ?>, <?= $c->nama ?>. <?= $c->kode_pos ?></td>
                                            </tr>


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                    <hr>

                                </div>

                                <div class="timeline-item">

                                    <h3 class="timeline-header"><strong>Alamat Domisili</strong></h3>
                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Alamat</th>
                                                <td style='width: 900px'><?= $c->alamat_domisili ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'></th>
                                                <td style='width: 900px'><?= $c->nama ?>, <?= $c->nama ?>. <?= $c->kode_pos ?></td>
                                            </tr>


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                    <hr>

                                </div>
                            </div>

                            <div class="time-label">
                                <span class="bg-warning">Pendidikan Terakhir</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-check bg-secondary"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header">Riwayat Pendidikan Terakhir</h3>
                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Nama Sekolah/Perguruan Tinggi</th>
                                                <td style='width: 900px'><?= $c->nama ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'></th>
                                                <td style='width: 900px'><?= $c->nama ?>, <?= $c->nama ?>. <?= $c->kode_pos ?></td>
                                            </tr>


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="time-label">
                                <span class="bg-green">Pengalaman Kerja</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-secondary"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header">Riwayat Pengalaman Kerja</h3>
                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Nama Sekolah/Perguruan Tinggi</th>
                                                <td style='width: 900px'><?= $c->nama ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'></th>
                                                <td style='width: 900px'><?= $c->nama ?>, <?= $c->nama ?>. <?= $c->kode_pos ?></td>
                                            </tr>


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="time-label">
                                <span class="bg-purple">Nilai TES ONLINE</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-secondary"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header">Nilai TES</h3>
                                    <div class="ml-2 mt-2 mb-2 mr-2">
                                        <table class='table table-bordered table-hover table-striped table-responsive'>
                                            <tr>
                                                <th style='width: 300px'>Nama Sekolah/Perguruan Tinggi</th>
                                                <td style='width: 900px'><?= $c->nama ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'></th>
                                                <td style='width: 900px'><?= $c->nama ?>, <?= $c->nama ?>. <?= $c->kode_pos ?></td>
                                            </tr>


                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- End Edit -->

<script type="text/javascript">
    $(function() {
        $('#data').dataTable();
    });
    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->