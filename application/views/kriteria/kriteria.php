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
            <?php $this->view('message') ?>
            <?php echo $this->session->flashdata('failed') ?>

            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Data Kriteria</h3>

                    <div class="card-tools">
                        <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus-circle"></i> Tambah Kriteria
                        </button> -->

                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center; width: 10px;">No</th>
                                <th style="text-align:center; width: 100px;">Kode Kriteria</th>
                                <th style="text-align:center; width: 230px;">Kriteria</th>
                                <th style="text-align:center">Kategori/Tipe</th>
                                <th style="text-align:center">Bobot</th>
                                <th style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kriteria as $k) { ?>
                                <td style="text-align:center"><?php echo $no; ?></td>
                                <td><?php echo $k->kode_kriteria; ?></td>
                                <td><?php echo $k->kriteria; ?></td>
                                <td><?php if ($k->tipe == 1) { ?>
                                        Benefit
                                    <?php } else { ?>
                                        Cost
                                    <?php } ?>
                                </td>
                                <td><?php echo $k->bobot; ?></td>

                                <td style="text-align:center">
                                    <!-- <button type="button" class="btn btn-flat btn-primary btn-xs" data-toggle="modal" data-target="#detailsiswa" data-nisn="<?php echo $k->id_kriteria ?>"><i class="fa fa-info-circle"></i> Detail</button> -->
                                    <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit<?= $k->id_kriteria ?>"><i class="fa fa-edit"></i> Edit</button>

                                    <!-- <a href="<?php echo base_url('siswa/hapus/' . $k->id_kriteria); ?>" class="btn btn-flat btn-danger btn-xs" id="btn-hapus"><i class="fas fa-trash"></i> Hapus</a> -->
                                </td>
                                </tr>


                            <?php
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal tambah -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php echo form_open('kriteria/add') ?>

            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Kriteria</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Kriteria</label>
                            <div class="col-sm-9">

                                <input type="hidden" name="id_kriteria" class="form-control" placeholder="Kode Kriteria" value="<?= $kriteria1 + 1 ?>" readonly>

                                <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode Kriteria" value="<?php echo kode_kriteria(); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kriteria</label>
                            <div class="col-sm-9">
                                <input type="text" name="kriteria" class="form-control" placeholder="Contoh : Tinggi Badan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori/Tipe</label>
                            <div class="col-sm-9">
                                <select name="tipe" class="form-control" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    <option value="0">Cost</option>
                                    <option value="1">Benefit</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bobot</label>
                            <div class="col-sm-9">
                                <input type="text" name="bobot" class="form-control" placeholder="Bobot" maxlength="2" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal Edit -->
<?php foreach ($kriteria as $k) : ?>
    <div class="modal fade" id="modal-edit<?= $k->id_kriteria ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <?php echo form_open(base_url('kriteria/update_aksi')) ?>

                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Kriteria</h4>
                </div>
                <div class="modal-body table-responsive">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Kriteria</label>
                                <div class="col-sm-9">

                                    <input type="hidden" name="id_kriteria" class="form-control" placeholder="Kode Kriteria" value="<?= $k->id_kriteria ?>" readonly>

                                    <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode Kriteria" value="<?= $k->kode_kriteria ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kriteria</label>
                                <div class="col-sm-9">
                                    <input type="text" name="kriteria" class="form-control" value="<?= $k->kriteria ?>" placeholder="Contoh : Tinggi Badan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kategori/Tipe</label>
                                <div class="col-sm-9">
                                    <select name="tipe" class="form-control select2" required>

                                        <?php

                                        echo " <option selected disabled>Pilihan</option>";
                                        if ($k->tipe == '0') {
                                            echo "<option value = '0' selected>Cost</option>
                                                <option value ='1'>Benefit</option>";
                                        } elseif ($k->tipe == '1') {
                                            echo "<option value = '0'>Cost</option>
                                                <option value ='1' selected>Benefit</option>";
                                        }
                                        ?>

                                        <!-- <option value="" selected disabled>-- Pilih Kategori --</option>
                                        <option value="0">Cost</option>
                                        <option value="1">Benefit</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bobot</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bobot" class="form-control" value="<?= $k->bobot ?>" placeholder=" Bobot" maxlength="2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
                </div>

                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>
<!-- End Edit -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->