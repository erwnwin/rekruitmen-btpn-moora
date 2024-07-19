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
            <?php echo $this->session->flashdata('success') ?>

            <div class="callout callout-success bg-success">
                <h5>Perhatikan!!</h5>

                <p>Silahkan pilih icon <i class="fa fa-plus-circle"></i>, pilih <u>posisi/jabatan</u> yang ingin ditampilkan data calon pegawai.</p>
            </div>

            <div class="card card-outline card-indigo collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Data Calon Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- <form action="<?= base_url('alternatif/add') ?>" method="post"> -->
                    <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kode Alternatif</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_alternatif" value="<?php echo kode_alternatif(); ?>" readonly>
                            </div>
                        </div> -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pilih Posisi/jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" id="job" name="id_job" style="width: 100%;" required>
                                <option>Pilihan</option>
                                <?php
                                foreach ($job as $data) { // Lakukan looping pada variabel kelas dari controller
                                    echo "<option value='" . $data->id_job . "'>" . $data->job . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-check-circle"></i> Simpan
                            </button>
                        </div>
                    </div> -->
                    <!-- </form> -->
                    <!-- /.card-body -->

                    <div class="" id="alternatif">
                    </div>





                </div>
                <!-- /.card -->



            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Edit -->
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
                                <span class="bg-red">Alamat : <?= $c->nama_lengkap ?></span>
                            </div>

                            <div>
                                <i class="fas fa-check bg-secondary"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header"><strong>Alamat KTP</strong></h3>
                                    <ul class="mt-3 mb-3">
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                    </ul>
                                    <hr>

                                </div>

                                <div class="timeline-item">

                                    <h3 class="timeline-header"><strong>Alamat Domisili</strong></h3>
                                    <ul class="mt-3 mb-3">
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                    </ul>
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
                                <span class="bg-green">Pengalaman Kerja</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-secondary"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header">Fitur yang tersedia</h3>
                                    <ul class="mt-3 mb-3">
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                        <li>Penambahan fitur edit pengguna</li>
                                    </ul>
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->