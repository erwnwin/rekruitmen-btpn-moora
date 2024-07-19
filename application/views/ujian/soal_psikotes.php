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
                    <h3 class="card-title">Bank Soal Psikotes</h3>

                    <div class="card-tools">
                        <a href="<?= base_url('bank_soal/buat_soal_psikotes') ?>" class="btn bg-purple btn-flat btn-sm"><i class="fa fa-plus"></i> Buat Soal</a>
                        <a href="<?= base_url('bank_soal') ?>" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-arrow-left"></i> </a>

                    </div>


                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!-- <th class="text-center">
                                    <input type="checkbox" class="select_all">
                                </th> -->
                                <th width="25">No.</th>
                                <th>Nama HRD</th>
                                <th>Nama Tes</th>
                                <th>Soal</th>
                                <th>Tgl Dibuat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($psikotes as $p) { ?>
                                <tr>
                                    <!-- <td class="text-center">
                                        <input type="checkbox" class="select_all">
                                    </td> -->
                                    <td style="text-align:center"><?= $no; ?></td>
                                    <td><?= $p->nama_pengguna; ?></td>
                                    <td><?= $p->jenis_ujian; ?></td>
                                    <td><?= $p->soal; ?></td>
                                    <td><?= $p->created_on; ?></td>
                                    <td>

                                    </td>
                                </tr>

                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                        <!-- <tfoot>
                                
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox" class="select_all">
                                    </th>
                                    <th width="25">No.</th>
                                    <th>Dosen</th>
                                    <th>Mata Kuliah</th>
                                    <th>Soal</th>
                                    <th>Tgl Dibuat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot> -->
                    </table>

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