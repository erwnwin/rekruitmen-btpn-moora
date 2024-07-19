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
                        <a href="<?= base_url('perhitungan_moora') ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-arrow-left"></i> Back
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
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- 
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

                        </div> -->
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
                                <?php foreach ($alternatif as $alt) : ?>
                                    <tr>
                                        <td><?php echo ucfirst($alt->nama_lengkap) ?></td>
                                        <?php foreach ($kriteria as $val) :  ?>
                                            <td>
                                                <?php $data_perhitungan_nilai = $this->m_manager->get_niai_setiap_alternatif($alt->id_akun_calon_pegawai, $val->id_kriteria);
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

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Melakukan Normalisasi Matriks</h3>

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
                                    <th>Kode Kriteria</th>
                                    <?php foreach ($alternatif as $val) : ?>
                                        <th>A<?php echo $val->id_akun_calon_pegawai ?></th>
                                    <?php endforeach ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($normalisasi as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>
                                        <td><?php echo "C" . $key; ?></td>
                                        <?php foreach ($value as $k => $v) : ?>
                                            <td><?php echo $value[$k]; ?></td>
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


            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Menghitung Nilai Matriks Ternormalisasi</h3>

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
                                    <th>Kode</th>
                                    <?php foreach ($kriteria as $val) : ?>
                                        <th>C<?php echo $val->id_kriteria ?></th>
                                    <?php endforeach ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($ternormalisasi as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>
                                        <td><?php echo "A" . $key; ?></td>
                                        <?php foreach ($value as $k => $v) : ?>
                                            <td><?php echo $value[$k]; ?></td>
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

            <div class="card card-outline card-lime">
                <div class="card-header">
                    <h3 class="card-title">Melakukan Nilai Optimasi Setiap Alternatif </h3>

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
                        <table class="table table-bordered table-hover table-striped table-sm display" id="table3" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Nilai Maximum</th>
                                    <th>Nilai Minimum</th>
                                    <th>Nilai Yi = (Max - Min)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($tabel_yi as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>
                                        <td><?php echo "A" . $key; ?></td>
                                        <td><?php echo $max[$key]; ?></td>
                                        <td><?php echo $min[$key]; ?></td>
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

            <!-- <div class="card card-outline card-navy">
                <div class="card-header">
                    <h3 class="card-title">Melakukan Nilai Optimasi Setiap Alternatif </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
             
                </div>
           
                <div class="card-body">

                </div>
              
            </div> -->


            <div class="card card-outline card-navy">
                <div class="card-header">
                    <h3 class="card-title">Menentukan Ranking Setiap Alternatif </h3>

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
                        <table class="table table-bordered table-hover table-striped table-sm display" id="table4" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Nilai Optimasi</th>
                                    <th>Ranking</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $key = 1; ?>
                                <?php foreach ($sorted_rank_data as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>
                                        <td><?php echo "A" . $key; ?></td>
                                        <td><?php echo $value['value']; ?></td>
                                        <!-- <td><?php echo $value['id_job']; ?></td> -->
                                        <td><?php echo $value['rank']; ?></td>
                                        <td>
                                            <?php foreach ($jumlah_terima as $jt) { ?>
                                                <?php foreach ($alternatif as $val) { ?>
                                                    <?php if ($value['rank'] <= $jt->jumlah) { ?>
                                                        <input type="hidden" class="form-control" value="<?= $val->id_akun_calon_pegawai ?>">
                                                        <button type="button" class="btn btn-success btn-xs btn-flat btn-sm" data-toggle="modal" data-target="#modal-kirim<?= $val->id_akun_calon_pegawai ?>"><i class="fa fa-check-circle"></i> Kirimi Pesan Masuk Kualifikasi</button>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </td>
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

<!-- modal tambah -->
<?php foreach ($alternatif as $val) { ?>
    <div class="modal fade" id="modal-kirim<?= $val->id_akun_calon_pegawai ?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <?php echo form_open(base_url('perhitungan_moora/kirim_pesan')) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Kirim pesan</h4>
                </div>
                <div class="modal-body table-responsive">
                    <div class="card-body">
                        <div class="callout callout-default">
                            <p>Silahkan klik tombol <u><b>Kirim pesan</b></u> di bawah ini.</p>
                        </div>
                        <input type="hidden" name="id_akun_calon_pegawai" value="<?= $val->id_akun_calon_pegawai ?>" class="form-control" required>
                        <textarea name="pesan" cols="5" rows="3" class="form-control" readonly>Anda dinyatakan LOLOS pada Posisi Branch Manager dalam Seleksi Penerimaaan Calon Pegawai Bank BTPN KC Makassar. Terima kasih atas partisipasi saudara/i</textarea>
                        <input type="hidden" name="status" value="diterima" class="form-control" required>


                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="suubmit" class="btn btn-primary"><i class="fa fa-edit"></i> Kirim pesan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>

                </div>

                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->