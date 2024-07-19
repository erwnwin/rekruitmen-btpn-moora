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

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Peserta Ujian</h3>

                    <div class="card-tools">
                        <!-- <a href="<?= base_url('peserta_ujian/tambah_peserta') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Peserta</button></a> -->
                    </div>
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action="" method="get">
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Posisi/Jabatan</label>
                                <div class=" col-sm-10">
                                    <select class="select2 form-control" name="job_vacancy" required="">
                                        <option value="">Pilihan</option>
                                        <?php
                                        foreach ($job as $data) {  ?>
                                            <option value="<?= $data->id_job ?>"><?= $data->job ?></option>
                                        <?php  }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-flat" title="Pilih Lowongan">Pilih Lowongan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Ujian</h3>

                    <div class="card-tools">
                        <!-- <a href="<?= base_url('peserta_ujian/tambah_peserta') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Peserta</button></a> -->
                    </div>
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action="<?= base_url('peserta_ujian/insert_'); ?>" method="post">
                        <div class="box-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Ujian</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="id_jenis_ujian" required>
                                        <option selected="selected" disabled="" value="">Pilih Jenis Ujian</option>
                                        <?php foreach ($jenis_ujian as $a) { ?>
                                            <option value="<?= $a->id_jenis_ujian ?>"><?= $a->jenis_ujian; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Ujian</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Ujian</label>
                                <div class="col-sm-10">
                                    <div class="input-group time" id="reservationtime" data-target-input="nearest">
                                        <input type="text" name="jam" class="form-control datetimepicker-input" data-target="#reservationtime" />
                                        <div class="input-group-append" data-target="#reservationtime" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Durasi Ujian</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="durasi_ujian" placeholder="Masukan Waktu Lama Ujian dalam Menit" required>
                                </div>
                            </div>



                        </div>
                        <!-- /.box-body -->

                        <div class="box-body">
                            <table id="data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Nama Calon Pegawai</th>
                                        <th>NIK</th>
                                        <th>Posisi</th>
                                        <th width="13%">
                                            <input type="checkbox" class="check-all" id="cek-semua" /> Pilih Semua
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($calon as $d) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d->nama_lengkap; ?></td>
                                            <td><?php echo $d->no_ktp; ?></td>
                                            <td><?php echo $d->job; ?></td>

                                            <td>
                                                <input type="checkbox" name="id[]" value="<?php echo $d->id_akun_calon_pegawai; ?>" />
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                        <div class="box-footer">
                            <a href="<?= base_url('peserta_ujian') ?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                            <button type="submit" class="btn btn-primary btn-flat"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>


        </div>
    </section>
</div>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->