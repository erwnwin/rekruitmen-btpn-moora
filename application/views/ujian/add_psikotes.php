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
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Form Buat Soal Psikotes</h3>

                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <?= form_open_multipart('bank_soal/save_psikotes', array('id' => 'formsoal'), array('method' => 'add')); ?>
                    <div class="form-group col-sm-12">
                        <label>Nama HRD</label>
                        <input type="hidden" name="id_akun_pengguna" value="<?=
                                                                            $this->session->userdata('id_akun_pengguna');
                                                                            ?>">
                        <input type="hidden" name="id_jenis_ujian" value="1">
                        <input type="text" readonly="readonly" class="form-control" value="<?=
                                                                                            $this->session->userdata('nama_pengguna');
                                                                                            ?> ~ (SOAL PSIKOTES)">

                    </div>

                    <div class="col-sm-12">
                        <label for="soal" class="control-label">Soal</label>
                        <div class="form-group">
                            <input type="file" name="file_soal" class="form-control">
                            <small class="help-block" style="color: #dc3545"><?= form_error('file_soal') ?></small>
                        </div>
                        <div class="form-group">
                            <textarea name="soal" id="soal" class="form-control"><?= set_value('soal') ?></textarea>
                            <small class="help-block" style="color: #dc3545"><?= form_error('soal') ?></small>
                        </div>
                    </div>

                    <!-- 
                            Membuat perulangan A-E 
                        -->
                    <?php
                    $abjad = ['a', 'b', 'c', 'd', 'e'];
                    foreach ($abjad as $abj) :
                        $ABJ = strtoupper($abj); // Abjad Kapital
                    ?>

                        <div class="col-sm-12">
                            <label for="file">Jawaban <?= $ABJ; ?></label>
                            <div class="form-group">
                                <input type="file" name="file_<?= $abj; ?>" class="form-control">
                                <small class="help-block" style="color: #dc3545"><?= form_error('file_' . $abj) ?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="jawaban_<?= $abj; ?>" id="jawaban_<?= $abj; ?>" class="form-control summernote"><?= set_value('jawaban_a') ?></textarea>
                                <small class="help-block" style="color: #dc3545"><?= form_error('jawaban_' . $abj) ?></small>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    <div class="form-group col-sm-12">
                        <label for="jawaban" class="control-label">Kunci Jawaban</label>
                        <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                            <option value="" disabled selected>Pilih Kunci Jawaban</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                        <small class="help-block" style="color: #dc3545"><?= form_error('jawaban') ?></small>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="bobot" class="control-label">Bobot Soal</label>
                        <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" id="bobot" class="form-control">
                        <small class="help-block" style="color: #dc3545"><?= form_error('bobot') ?></small>
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        <a href="<?= base_url('bank_soal/psikotes') ?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>

                    </div>

                    <?= form_close(); ?>
                </div>
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