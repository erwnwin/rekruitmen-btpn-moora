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
            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Peserta Ujian</h3>

                    <div class="card-tools">
                        <a href="<?= base_url('peserta_ujian/tambah_peserta') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Peserta</button></a>
                    </div>
                </div>

                <div class="card-body">
                    <!-- <form class="form-horizontal" action="" method="get">
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
                                    <button type="submit" class="btn btn-sm btn-primary btn-flat" title="Pilih Lowongan">Filter</button>
                                </div>
                            </div>
                        </div>
                    </form> -->

                    <table id="data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Calon Pegawai</th>
                                <th>NIK</th>
                                <!-- <th>Posisi</th> -->
                                <th width="13%">
                                    <!-- <input type="checkbox" class="check-all" id="cek-semua" /> Pilih Semua -->
                                    Action
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
                                    <!-- <td><?php echo $d->job; ?></td> -->
                                    <td>
                                        <a href="<?= base_url('peserta_ujian/delete/' . $d->id_peserta) ?>" class="btn btn-sm btn-danger btn-xs" id="btn-hapus"><i class="fa fa-trash"></i></a>
                                        <!-- <input type="checkbox" name="id[]" value="<?php echo $d->id_akun_calon_pegawai; ?>" /> -->
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

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