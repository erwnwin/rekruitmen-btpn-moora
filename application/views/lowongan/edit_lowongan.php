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
            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Daftar Lowongan BTPN KC Makassar</h3>

                    <div class="card-tools">
                        <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus-circle"></i> Tambah Lowongan
                        </button> -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('lowongan/update_aksi') ?>" method="post">
                        <?php foreach ($job as $j) { ?>


                            <div class="form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Lowongan</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="id_job" class="form-control" placeholder="Lowongan" value="<?= $j->id_job; ?>">
                                        <input type="text" name="job" class="form-control" placeholder="Lowongan" autocomplete="off" value="<?= $j->job; ?>">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi Job</label>
                                    <div class="col-sm-9">
                                        <textarea name="deskripsi_job" id="summernote" cols="4" rows="6" class="form-control" placeholder="Deskripsi Lowongan"><?= $j->deskripsi_job; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Persyaratan Job</label>
                                    <div class="col-sm-9">
                                        <textarea name="persyaratan" id="summernote1" cols="4" rows="6" class="form-control" placeholder="Deskripsi Lowongan"><?= $j->persyaratan; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Update</button>
                                        <a href="<?= base_url('lowongan') ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Kembali</a>
                                    </div>
                                </div>

                            </div>

                        <?php } ?>
                    </form>
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
            <?php echo form_open('lowongan/tambah_aksi') ?>

            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Lowongan</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lowongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="job" class="form-control" placeholder="Lowongan" autocomplete="off">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Syarat Jurusan</label>
                            <div class="col-sm-9">
                                <select class="select2" name="id_jurusan[]" multiple="multiple" data-placeholder="Pilih Jurusan" data-dropdown-css-class="select2-primaryy" style="width: 100%;">
                                    <?php foreach ($jurusan as $j) { ?>
                                        <option value="<?= $j->id_jurusan ?>"><?= $j->jurusan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Syarat</label>
                            <div class="col-sm-9">
                                <?php foreach ($jurusan as $r) { ?>
                                    <div class="form-check">
                                        <input class="minimal" type="checkbox" multiple name="jurusan[]" value="<?= $r->jurusan ?>">
                                        <label class="form-check-label">
                                            <?= $r->jurusan ?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Deskripsi Job</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi_job" id="summernote" cols="4" rows="6" class="form-control" placeholder="Deskripsi Lowongan"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Persyaratan Job</label>
                            <div class="col-sm-9">
                                <textarea name="persyaratan" id="summernote1" cols="4" rows="6" class="form-control" placeholder="Deskripsi Lowongan"></textarea>
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