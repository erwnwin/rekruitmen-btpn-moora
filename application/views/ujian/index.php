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
            <?= $this->session->flashdata('message'); ?>

            <?php echo $this->session->flashdata('pesan') ?>
            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


            <!-- <div class="callout callout-success shadow bg-success">

                <p>Silahkan klik Tombol di bawah untuk membuat soal PSIKOTES dan TERTULIS</p>
            </div> -->
            <!-- 
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= base_url('bank_soal/psikotes') ?>" class="btn btn-flat btn-block btn-info"><i class="fa fa-file-alt"></i> Soal Psikotes</a>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('bank_soal/tertulis') ?>" class="btn btn-flat btn-block btn-primary"><i class="fa fa-file-alt"></i> Soal Tertulis</a>
                </div>
            </div>
            <br> -->
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title">Daftar Soal Ujian</h3>

                    <div class="card-tools">
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="get" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih Jenis Ujian</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="id" style="width: 100%;" required>
                                        <option selected="selected" disabled="">Pilih Jenis Ujian</option>
                                        <?php foreach ($ujian as $s) { ?>
                                            <option value="<?= $s->id_jenis_ujian ?>"><?= $s->jenis_ujian; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="<?= base_url('bank_soal/tambah_soal'); ?>" class="btn btn-default btn-flat btn-sm"><span class="fa fa-refresh"></span> Refresh</a>
                                    <button type="submit" class="btn btn-primary btn-flat btn-sm" title="Filter Data Soal Ujian"><span class="fa fa-filter"></span> Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                        </div>
                        <!-- /.box-footer -->
                    </form>

                </div>
            </div>

            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Daftar Bank Soal Ujian</h3>

                    <div class="card-tools">
                        <a href="<?= base_url('bank_soal/tambah_soal') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Soal</button></a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>

                                <th width="20%">Jenis Ujian</th>
                                <th>SOAL UJIAN</th>
                                <th width="13%">KUNCI JAWABAN</th>
                                <th width="8%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($soal_ujian as $d) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>

                                    <td><?php echo $d->jenis_ujian; ?></td>
                                    <td>
                                        <?php echo $d->pertanyaan; ?>

                                        <ol type="A">
                                            <li>
                                                <?php if ('A' == $d->kunci_jawaban) {
                                                    echo "<b>";
                                                    echo $d->a;
                                                    echo "</b>";
                                                } else {
                                                    echo $d->a;
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <?php if ('B' == $d->kunci_jawaban) {
                                                    echo "<b>";
                                                    echo $d->b;
                                                    echo "</b>";
                                                } else {
                                                    echo $d->b;
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <?php if ('C' == $d->kunci_jawaban) {
                                                    echo "<b>";
                                                    echo $d->c;
                                                    echo "</b>";
                                                } else {
                                                    echo $d->c;
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <?php if ('D' == $d->kunci_jawaban) {
                                                    echo "<b>";
                                                    echo $d->d;
                                                    echo "</b>";
                                                } else {
                                                    echo $d->d;
                                                }
                                                ?>
                                            </li>
                                            <li>
                                                <?php if ('E' == $d->kunci_jawaban) {
                                                    echo "<b>";
                                                    echo $d->e;
                                                    echo "</b>";
                                                } else {
                                                    echo $d->e;
                                                }
                                                ?>
                                            </li>
                                        </ol>
                                    </td>
                                    <td><b><?php echo $d->kunci_jawaban; ?></b></td>
                                    <td>
                                        <a href="<?= base_url() . 'bank_soal/edit/' . $d->id_soal_ujian; ?>" class="btn btn-xs btn-success"><span class="fa fa-edit" title="Ubah"></span></a>
                                        <a href="<?php echo base_url('bank_soal/hapus/' . $d->id_soal_ujian); ?>" class="btn btn-danger btn-xs" id="btn-hapus"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
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