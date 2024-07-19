<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0"><?= $title1; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <a href="<?= base_url('perhitungan_moora') ?>" class="btn btn-danger btn-sm" style="border-radius: 30px;">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Menentukan Nilai Alternatif</h3>

                    <div class="card-tools">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-filter"></i> Filter Berdasarkan Posisi</button>
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <?php
                                foreach ($job as $data) { // Lakukan looping pada variabel kelas dari controller
                                    echo "
                                    <a class='dropdown-item' href='" . base_url('perhitungan_moora/view_data/' . $data->id_job) . "'>" . $data->job . "</a>
                                   ";
                                }
                                ?>

                            </div>

                        </div>

                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped table-sm display" id="table1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Calon Pegawai</th>
                                    <?php foreach ($kriteria as $val) : ?>
                                        <th>C<?php echo $val->id_kriteria ?></th>
                                    <?php endforeach ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lihat as $alt) : ?>
                                    <tr>
                                        <td><?php echo ucfirst($alt->nama_lengkap) ?></td>
                                        <?php foreach ($kriteria as $val) :  ?>
                                            <td>
                                                <?php $data_perhitungan_nilai = $this->m_posisi->get_niai_setiap_alternatif2($alt->id_akun_calon_pegawai, $val->id_kriteria);
                                                echo $data_perhitungan_nilai['total_nilai']; ?>
                                            </td>
                                        <?php endforeach ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">Melakukan SQRT</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped table-sm display" id="table2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Hasil Nilai SQRT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($sqrt as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 4px;"><?php echo $no++; ?></td>
                                        <td><?php echo "C" . $key; ?></td>
                                        <td><?php echo $value; ?></td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
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