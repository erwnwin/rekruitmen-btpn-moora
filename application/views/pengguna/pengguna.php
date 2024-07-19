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

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Pengguna ~ Hak Akses Sistem Assesment BTPN KC Makassar</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus-circle"></i> Tambah Pengguna
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button> -->
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center; width: 10px;">No</th>
                                <th style="text-align:center; width: 230px;">Nama Pengguna</th>
                                <th>Email</th>
                                <th style="text-align:center; width: 100px;">Hak Akses</th>

                                <th style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengguna as $p) { ?>
                                <td style="text-align:center"><?php echo $no; ?></td>
                                <td><?php echo $p->nama_pengguna; ?></td>
                                <td><?php echo $p->alamat_email; ?></td>
                                <td><?php if ($p->role_id == 1) { ?>
                                        <span class="badge badge-danger">Pimpinan</span>
                                    <?php } elseif ($p->role_id == 2) { ?>
                                        <span class="badge badge-success">HRD</span>
                                    <?php } ?>
                                </td>


                                <td style="text-align:center">
                                    <!-- <button type="button" class="btn btn-flat btn-primary btn-xs" data-toggle="modal" data-target="#detailsiswa" data-nisn="<?php echo $k->id_kriteria ?>"><i class="fa fa-info-circle"></i> Detail</button> -->
                                    <!-- <a href="<?php echo base_url('pengguna/update/' . $p->id_akun_pengguna); ?>" class="btn btn-flat btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a> -->

                                    <a href="<?php echo base_url('pengguna/delete/' . $p->id_akun_pengguna); ?>" class="btn btn-flat btn-danger btn-xs" id="btn-hapus"><i class="fas fa-trash"></i> Hapus</a>
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
            <?php echo form_open(base_url('pengguna/tambah_aksi')) ?>

            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Pengguna</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama User</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="is_active" class="form-control" value="1" autocomplete="off">
                                <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Pengguna" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="alamat_email" class="form-control" placeholder="Alamat Email" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="password" class="form-control" placeholder="Passsowrd" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hak Akses</label>
                            <div class="col-sm-9">
                                <select class="select2" name="role_id" data-placeholder="Pilihan Hak Akses" data-dropdown-css-class="select2-primaryy" style="width: 100%;" required>
                                    <option value="">Pilihan</option>
                                    <option value="2">HRD</option>
                                    <option value="1">Pimpinan</option>
                                </select>
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