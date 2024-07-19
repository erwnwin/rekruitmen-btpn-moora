<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0"><?= $title1; ?></h1>
                </div><!-- /.col -->

                <!-- 
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambah" style="border-radius: 25px;"><i class="fa fa-plus-circle"></i> Tambah Penilaian</button>

                    </ol>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php echo $this->session->flashdata('pesan') ?>

            <div class="callout callout-info bg-info">
                <!-- <h5>Perhatikan!!</h5>
                            <hr style="background-color: azure;"> -->
                <p>Silahkan klik tombol <u><b>Tambah Penilaian</b></u> atau <b><u>Tambahkan Jumlah Calon Pegawai yang akan diterima</u></b> di bawah ini.</p>
            </div>
            <!-- // use PgSql\Result; collapsed-card -->

            <form action="<?= base_url('alternatif_penilaian/add_save') ?>" method="post">


                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-tambah-jumlah" style="border-radius: 25px;"><i class="fa fa-plus-circle"></i> Tambahkan Jumlah Calon Pegawai yang diterima. Pilih berdasarkan posisi</button>
                        </ol>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-tambah" style="border-radius: 25px;"><i class="fa fa-plus-circle"></i> Tambah Penilaian</button>
                        </ol>
                    </div>

                </div><!-- /.row -->

            </form>

            <!-- <div class="" id="alternatif_penilaian">
            </div> -->

            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal tambah -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog ">
        <div class="modal-content">
            <?php echo form_open(base_url('alternatif_penilaian/input_penilaian')) ?>
            <div class="modal-header">
                <h4 class="modal-title">Input Penilaian Calon Pegawai</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="callout callout-default">
                        <!-- <h5>Perhatikan!!</h5>
                            <hr style="background-color: azure;"> -->
                        <p>Silahkan klik tombol <u><b>Input Penilaian</b></u> di bawah ini.</p>
                    </div>
                    <input type="hidden" name="count_add" id="count_add" value="<?php echo $kriteria1 ?>" class="form-control" required>
                    <!-- <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">

                              
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="suubmit" class="btn btn-primary"><i class="fa fa-edit"></i> Input Penilaian</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>

            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- tambah jumlah -->
<div class="modal fade" id="modal-tambah-jumlah">
    <div class="modal-dialog ">
        <div class="modal-content">
            <?php echo form_open(base_url('alternatif_penilaian/input_jumlah_terima')) ?>
            <div class="modal-header">
                <h4 class="modal-title">Tambahkan Jumlah Calon Pegawai yang diterima</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">

                    <div class="form-group">
                        <div class="mt-0">
                            <label class="form-label">Pilih Posisi/jabatan</label>

                            <select class="form-control select2" id="job_alt" name="id_job" style="width: 100%;" required>
                                <option value="">Pilihan</option>
                                <?php
                                foreach ($job as $data) { // Lakukan looping pada variabel kelas dari controller
                                    echo "<option value='" . $data->id_job . "'>" . $data->job . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mt-2">
                            <label class="form-label">Jumlah yang dibutuhkan</label>
                            <input type="number" name="jumlah" class="form-control" maxlength="2" placeholder="Masukkan jumlah" autocomplete="off" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="suubmit" class="btn btn-primary"><i class="fa fa-edit"></i> Tambahkan Jumlah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>

            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->