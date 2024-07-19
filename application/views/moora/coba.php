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
            <form action="<?php echo site_url('coba/insert'); ?>" method="post">
                <hr>
                <div class="form-row">



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pilih Posisi/jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" id="job_alt" name="id_job" style="width: 100%;" required>
                                <option value="">Pilihan</option>
                                <?php
                                foreach ($job as $data) { // Lakukan looping pada variabel kelas dari controller
                                    echo "<option value='" . $data->id_job . "'>" . $data->job . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Calon Pegawai</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" id="alternatif_penilaian" name="id_akun_calon_pegawai" style="width: 100%;" required>
                                <option value="">Pilihan</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <input type="hidden" name="total" id="total" value="<?php echo $kriteria1 ?>">

                    <?php for ($i = 1; $i <= $kriteria1; $i++) { ?>
                        <div class="form-group col-md-4">
                            <label for="kriteria1">Status Bangunan Tinggal</label>
                            <select id="kriteria1" name="kriteria<?= $i ?>" class="form-control">
                                <option selected>-- Pilih Status Bangunan --</option>
                                <option value="50">Milik Sendiri</option>
                                <option value="40">Kontrak / Sewa</option>
                                <option value="30">Bebas Sewa</option>
                            </select>


                        </div>

                    <?php } ?>
                </div>



                <div class="form-group">
                    <a href="<?php echo base_url('nilai'); ?>" class="btn btn-sm btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
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