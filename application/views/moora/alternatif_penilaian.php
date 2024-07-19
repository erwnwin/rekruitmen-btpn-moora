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
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Penilaian Calon Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="<?= base_url('alternatif_penilaian/save') ?>" method="post">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Calon Pegawai</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" name="id_pengguna" style="width: 100%;" required>
                                    <option value="" selected disabled>-- Pilih Calon Pegawai --</option>
                                    <?php
                                    $al = $this->db->query("SELECT * FROM alternatif 
                                      JOIN pengguna ON alternatif.id_pengguna=pengguna.id_pengguna "); ?>

                                    <?php foreach ($al->result() as $p) { ?>
                                        <option value="<?= $p->id_pengguna ?>"><?= $p->nama_lengkap_pengguna ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <span class="badge bg-maroon mb-3">Penilaian Menggunakan Metode MOORA</span>
                        <br>
                        <?php foreach ($kriteria as $k) { ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?= $k->kriteria ?></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="id_kriteria" id="id_kriteria" style="width: 100%;" required>
                                        <option value="" selected disabled>-- Pilih Sub Kriteria --</option>
                                        <?php

                                        $sub_kriteria = $this->db->query("SELECT * FROM sub_kriteria 
                                                    JOIN kriteria ON sub_kriteria.id_kriteria=kriteria.id_kriteria 
                                                    WHERE sub_kriteria.id_kriteria='$k->id_kriteria' "); ?>

                                        <?php
                                        $no = 1;
                                        foreach ($sub_kriteria->result() as $s) { ?>
                                            <option data-totalnilai="<?= $s->subbobot ?>" value="<?= $s->id_kriteria ?>"><?= $s->sub_kriteria ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total Nilai</label>
                                <div class="col-sm-10">

                                    <input type="text" name="totalnilai" class="form-control" placeholder="Bobot Sub Kriteria" readonly>
                                </div>
                            </div>

                        <?php } ?>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check-circle"></i> Simpan Penilaian
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- /.card-body -->
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