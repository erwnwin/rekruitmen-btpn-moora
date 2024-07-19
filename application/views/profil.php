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
            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">Profil saya</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class='table table-bordered table-hover table-responsive'>
                        <tr>
                            <th style='width: 300px'>Nama Lengkap</th>
                            <td style='width: 900px'><?php echo $this->session->userdata('nama_pengguna') ?></td>
                        </tr>
                        <tr>
                            <th style='width: 300px'>Username</th>
                            <td style='width: 900px'><?php echo $this->session->userdata('alamat_email') ?></td>
                        </tr>
                        <tr>
                            <th style='width: 300px'>Hak Akses</th>
                            <?php if ($this->session->userdata('role_id') == '1') { ?>
                                <td><span class="badge badge-danger">Pimpinan</span></td>
                            <?php } else if ($this->session->userdata('role_id') == '2') { ?>
                                <td><span class="badge badge-info">HRD</span></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <th style='width: 300px'>#</th>
                            <td style='width: 900px'>
                                <a href="<?= base_url(
                                                'profil/ubah_password/' .
                                                    $this->session->userdata('id_akun_pengguna')
                                            ) ?>" class="btn btn-sm btn-flat btn-success"><i class="fa fa-lock"></i> Ubah Password</a>
                                <a href="<?= base_url('profil/ubah_profil/' . $this->session->userdata('id_akun_pengguna')) ?>" class="btn btn-sm btn-flat btn-warning text-white"><i class="fa fa-edit"></i> Ubah Profil</a>
                            </td>
                        </tr>


                        <tr>

                        </tr>
                    </table>
                    <br>
                    <div class="callout callout-info bg-info">
                        <?php if ($this->session->userdata('role_id') == '1') { ?>
                            <h4> Perhatian!</h4>
                            Anda Login sebagai salah satu <b><u>Pimpinan</u></b> pada <b><u>BTPN KC Makassar</u></b>.
                        <?php } else if ($this->session->userdata('role_id') == '2') { ?>
                            <h4> Perhatian!</h4>
                            Anda Login sebagai salah satu <b><u>HRD</u></b> pada <b><u>BTPN KC Makassar</u></b>.
                        <?php }  ?>

                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->

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