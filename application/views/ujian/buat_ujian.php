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
            <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>


            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title">Form Ujian Baru</h3>

                    <div class="card-tools">
                        <a href="<?= base_url('ujian_master') ?>" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-arrow-left"></i> </a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-8">
                            <?= form_open('ujian_master/save', array('id' => 'formujian'), array(
                                'method' => 'add', 'id_akun_pengguna' =>
                                $this->session->userdata('id_akun_pengguna'), 'id_jenis_ujian' => 1
                            )) ?>
                            <div class="form-group">
                                <label for="nama_ujian">Nama Ujian</label>
                                <input autofocus="autofocus" onfocus="this.select()" placeholder="Nama Ujian" type="text" class="form-control" name="nama_ujian">
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_soal">Jumlah Soal</label>
                                <input placeholder="Jumlah Soal" type="number" class="form-control" name="jumlah_soal">
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group">
                                <label for="tgl_mulai">Tanggal Mulai</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="text" name="tgl_mulai" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Tanggal Mulai" />
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <!-- <input name="tgl_mulai" type="text" class="datetimepicker-input form-control" data-target="#reservationdatetime" placeholder="Tanggal Mulai"> -->
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Selesai</label>
                                <div class="input-group date" id="reservationdatetime1" data-target-input="nearest">
                                    <input type="text" name="tgl_selesai" class="form-control datetimepicker-input" data-target="#reservationdatetime1" placeholder="Tanggal Selesai" />
                                    <div class="input-group-append" data-target="#reservationdatetime1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <!-- <input name="tgl_selesai" type="text" class="datetimepicker-input form-control" data-target="#reservationdatetime" placeholder="Tanggal Selesai"> -->
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input placeholder="Menit" type="number" class="form-control" name="waktu">
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Acak Soal</label>
                                <select name="jenis" class="form-control">
                                    <option value="" disabled selected>--- Pilih ---</option>
                                    <option value="acak">Acak Soal</option>
                                    <option value="urut">Urut Soal</option>
                                </select>
                                <small class="help-block"></small>
                            </div>
                            <div class="form-group pull-right">
                                <button type="reset" class="btn btn-default btn-flat">
                                    <i class="fa fa-rotate-left"></i> Reset
                                </button>
                                <button id="submit" type="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>

                </div>
            </div>


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