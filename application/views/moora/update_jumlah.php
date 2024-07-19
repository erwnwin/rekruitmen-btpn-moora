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
            <form action="<?= base_url('alternatif_penilaian/update_jml') ?>" method="post">
                <div class="card card-outline card-purple">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Jumlah Terima Calon Pegawai</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php foreach ($jmlh as $jm) { ?>
                            <div class="form-group">
                                <div class="mt-0">
                                    <label class="form-label">Pilih Posisi/jabatan</label>

                                    <input type="hidden" name="id_job" class="form-control" maxlength="2" value="<?= $jm->id_job ?>" placeholder="Masukkan jumlah" autocomplete="off" required>
                                    <input type="text" class="form-control" maxlength="2" value="<?= $jm->job ?>" readonly>

                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Jumlah yang dibutuhkan</label>
                                    <input type="hidden" name="id_jumlah" class="form-control" maxlength="2" value="<?= $jm->id_jumlah ?>" placeholder="Masukkan jumlah" autocomplete="off" required>
                                    <input type="number" name="jumlah" class="form-control" maxlength="2" value="<?= $jm->jumlah ?>" placeholder="Masukkan jumlah" autocomplete="off" required>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i> Update</button>
                                    <a href="<?= base_url('alternatif_penilaian') ?>" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </form>
    </section>
</div>