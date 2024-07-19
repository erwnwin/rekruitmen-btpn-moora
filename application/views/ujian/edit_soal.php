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


            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Soal Ujian</h3>

                    <div class="card-tools">
                        <!-- <a href="<?= base_url('bank_soal/tambah_soal') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Soal</button></a> -->
                    </div>
                </div>


                <form action="<?= base_url('bank_soal/insert'); ?>" method="post">
                    <?php foreach ($soal as $su) { ?>


                        <div class="card-body">
                            <div class="form-horizontal">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Ujian</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_soal_ujian" class="form-control" value="<?= $su->id_soal_ujian ?>">
                                        <select class="form-control select2" name="id_jenis_ujian" style="width: 100%;" required>
                                            <option selected="selected" disabled="">Pilih Jenis Ujian</option>


                                            <?php foreach ($ujian as $s) { ?>


                                                <option value="<?= $s->id_jenis_ujian ?>" <?= $su->id_jenis_ujian == $s->id_jenis_ujian ? 'selected'  : null ?>><?= $s->jenis_ujian; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tulis Soal Ujian</label>
                                    <div class="col-sm-10">
                                        <textarea class="soal" id="summernote1" name="soal" required><?= $su->pertanyaan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jawaban A</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" class="form-control" style="width: 100%" name="a" required><?= $su->a ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jawaban B</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" class="form-control" style="width: 100%" name="b" required><?= $su->b ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jawaban C</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" class="form-control" style="width: 100%" name="c" required><?= $su->c ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jawaban D</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" class="form-control" style="width: 100%" name="d" required><?= $su->d ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jawaban E</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" class="form-control" style="width: 100%" name="e" required><?= $su->e ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kunci Jawaban</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="kunci" required>
                                            <option selected="selected" disabled="" value="">- Pilih Kunci Jawaban -</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <a href="<?= base_url('bank_soal') ?>" class="btn btn-sm btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                                        <button type="submit" class="btn btn-success btn-sm btn-flat" title="Tambah Data Soal Ujian"><span class="fa fa-save"></span> Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </form>

            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(function() {
        $('#data').dataTable();
    });
    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->