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
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="container-fluid">

            <!-- // use PgSql\Result; collapsed-card -->


            <form action="<?= base_url('coba/insert') ?>" method="post">


                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Penilaian Calon Pegawai</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label">Pilih Posisi/jabatan</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" id="job_alt" name="id_job" style="width: 100%;">
                                    <option value="">Pilihan</option>
                                    <?php
                                    foreach ($job as $data) {  ?>
                                        <option value="<?= $data->id_job ?>"><?= $data->job ?></option>
                                    <?php  }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="form-group row">

                            <label class="col-sm-2 col-form-label">ID Posisi/jabatan</label>
                            <div class="col-sm-10">

                                <select class="form-control select2" id="job" name="id_job" style="width: 100%;" disabled>
                                    <option value="">ID</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Calon Pegawai</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" id="alternatif_penilaian" name="id_akun_calon_pegawai" style="width: 100%;" required>
                                    <option value="">Pilihan</option>
                                </select>

                            </div>
                        </div>
                        <hr>
                        <span class="badge bg-maroon mb-3">Penilaian Menggunakan Metode MOORA</span>

                        <hr>
                        <div class="form-group row">

                            <input type="hidden" name="total" id="total" value="<?= $this->input->post('count_add') ?>">

                            <?php for ($i = 1; $i <= $this->input->post('count_add'); $i++) { ?>
                                <label class="col-sm-3 col-form-label">Pilih Kriteria Penilaian <?= $i; ?></label>
                                <div class="col-sm-9">

                                    <select class="form-control select2" id="kriteriaku<?= $i ?>" style="width: 100%;" required>
                                        <option value="">Pilihan Kriteria</option>
                                        <?php
                                        foreach ($kriteria as $data) {
                                            echo "<option value='" . $data->id_kriteria  . "'>" . $data->kriteria . "</option>";
                                        }
                                        ?>
                                    </select>

                                    <div class="mt-2"></div>
                                    <select class="form-control select2" id="alternatif_penilaian2<?= $i ?>" name="kriteria<?= $i ?>" style="width: 100%;">
                                        <option value="">Pilihan Sub Kriteria</option>
                                    </select>
                                    <div class="mt-2"></div>

                                    <select class="form-control" id="range_bobot<?= $i ?>" name="kriteria" style="width: 100%;" disabled>
                                        <option value="">Nilai Sub Kriteria</option>
                                    </select>
                                    <br>

                                </div>

                            <?php } ?>



                        </div>


                        <!-- <div id="insert-form"></div> -->


                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check-circle"></i> Simpan Penilaian
                                </button>
                            </div>
                        </div>



                    </div>


                </div>



            </form>

            <!-- <div class="" id="alternatif_penilaian">
            </div> -->

            <!-- /.container-fluid -->
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