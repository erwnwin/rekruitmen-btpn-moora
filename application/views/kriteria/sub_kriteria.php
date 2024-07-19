<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title1; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus-circle"></i> Tambah Sub Kriteria
                        </button>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php echo $this->session->flashdata('success') ?>
            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="row">
                <?php if ($kriteria == NULL) { ?>
                    <div class="col-md-12">
                        <div class="callout callout-danger bg-danger">
                            <h5>Data Kriteria Belum Diinput</h5>
                            <hr>
                            <p>Silahkan input data kriteria <a style="color:beige" href="<?= base_url('kriteria') ?>">Tambah Kriteria</a> terlebih dahulu.</p>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php foreach ($kriteria as $k) { ?>
                        <div class="col-md-6">
                            <div class="card card-outline card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Data Sub Kriteria : <strong><?= $k->kriteria ?></strong></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Sub Kriteria</th>
                                                <th>Range Nilai</th>
                                                <th style="width: 40px">Bobot</th>
                                                <th style="width: 40px">Act</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            // $kriteria = $this->db->query("SELECT * FROM kriteria  WHERE id_kriteria");
                                            $sub_kriteria = $this->db->query("SELECT * FROM sub_kriteria 
                                                    JOIN kriteria ON sub_kriteria.id_kriteria=kriteria.id_kriteria 
                                                    WHERE sub_kriteria.id_kriteria='$k->id_kriteria' "); ?>

                                            <?php foreach ($sub_kriteria->result() as $s) {  ?>

                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $s->sub_kriteria ?></td>
                                                    <td>
                                                        <span class="badge bg-danger"><?= $s->range ?></span>

                                                    </td>
                                                    <td><?= $s->subbobot ?></td>
                                                    <td>
                                                        <!-- <button class="btn btn-sm btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit<?= $s->id_sub_kriteria ?>"><i class="fa fa-edit"></i></button> -->
                                                        <a href="<?php echo base_url('sub_kriteria/delete/' . $s->id_sub_kriteria); ?>" class="btn btn-sm btn-danger btn-xs" id="btn-hapus"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>




        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Edit -->

<!-- End Edit -->

<!-- modal tambah -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php echo form_open('sub_kriteria/add') ?>

            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Sub Kriteria</h4>
            </div>
            <!-- <form>
                <select name="package" id="package">
                    <option value="" selected disabled>-- Pilih Range Nilai --</option>
                    <option data-price="1" data-discount="10" value="1">0 - 25 = Kurang</option>
                    <option data-price="2" data-discount="10" value="2">25 - 50 = Cukup</option>
                    <option data-price="3" data-discount="10" value="3">51 - 75 = Baik</option>
                    <option data-price="4" data-discount="10" value="4">76 - 100 = Sangat Baik</option>
                    <option data-price="100000" data-discount="10">Paket 1</option>
                    <option data-price="150000" data-discount="10">Paket 2</option>
                    <option data-price="200000" data-discount="10">Paket 3</option>
                </select>

                <div>
                    <label for="price">Harga</label>
                    <input type="text" name="price" readonly />
                    <br>
                    <label for="price">Discount</label>
                    <input type="text" name="discount" readonly />
                    <br>
                    <h4>Total: <span id="total">0</span></h4>
                </div>

            </form> -->
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kriteria</label>
                            <div class="col-sm-9">
                                <select name="id_kriteria" class="form-control select2" required>
                                    <option value="" selected disabled>-- Pilih Kriteria --</option>
                                    <?php foreach ($kriteria as $k) { ?>
                                        <option value="<?= $k->id_kriteria ?>"><?= $k->kriteria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sub Kriteria</label>
                            <div class="col-sm-9">
                                <input type="text" name="sub_kriteria" class="form-control" placeholder="Sub Kriteria" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Range Nilai</label>
                            <div class="col-sm-9">
                                <select name="range" id="range" class="form-control select2" required>
                                    <option value="" selected disabled>-- Pilih Range Nilai --</option>
                                    <option data-subbobot="1" value="0 - 25 = Kurang">0 - 25 = Kurang</option>
                                    <option data-subbobot="2" value="25 - 50 = Cukup">25 - 50 = Cukup</option>
                                    <option data-subbobot="3" value="51 - 75 = Baik">51 - 75 = Baik</option>
                                    <option data-subbobot="4" value="76 - 100 = Sangat Baik">76 - 100 = Sangat Baik</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bobot</label>
                            <div class="col-sm-9">
                                <input type="text" name="subbobot" class="form-control" placeholder="Bobot Sub Kriteria" readonly>
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



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->