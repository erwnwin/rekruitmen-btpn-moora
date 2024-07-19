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
                        <!-- <a href="<?= base_url('perhitungan_moora') ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-arrow-left"></i> Back
                        </a> -->
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

            <div class="card card-outline card-success collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Menentukan Nilai Alternatif</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
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
                                    <th style="width: 25px;">#</th>
                                    <th>Nama Calon Pegawai</th>
                                    <?php foreach ($kriteria as $val) : ?>
                                        <th>C<?php echo $val->id_kriteria ?></th>
                                    <?php endforeach ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($alternatif as $alt) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                            <!-- <button type="button" class="btn btn-sm btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete<?= $alt->id_akun_calon_pegawai ?>"><i class="fas fa-trash"></i></button> -->
                                            <!-- <a href="<?php echo base_url('perhitungan_moora/delete_nilai_teller/' . $alt->id_akun_calon_pegawai); ?>" class="btn btn-sm btn-danger btn-xs" id="btn-hapus"><i class="fas fa-trash"></i></a> -->
                                        </td>
                                        <td><?php echo ucfirst($alt->nama_lengkap) ?></td>
                                        <?php foreach ($kriteria as $val) :  ?>
                                            <td>
                                                <?php $data_perhitungan_nilai = $this->m_teller->get_niai_setiap_alternatif($alt->id_akun_calon_pegawai, $val->id_kriteria);
                                                echo $data_perhitungan_nilai['total_nilai']; ?>
                                            </td>

                                        <?php endforeach ?>

                                        <!-- <td>
                                            <button class="btn btn-xs btn-sm btn-info"><i class="fa fa-edit"></i> Edit Nilai</button>
                                        </td> -->
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-outline card-warning collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Melakukan SQRT</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
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

            <div class="card card-outline card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Melakukan Normalisasi Matriks</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
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


            <div class="card card-outline card-info collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Menghitung Nilai Matriks Ternormalisasi</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
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

            <div class="card card-outline card-lime show-card">
                <div class="card-header">
                    <h3 class="card-title">Melakukan Nilai Optimasi Setiap Alternatif </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#modal-peringkat"><i class="fa fa-check-circle"></i> Set Peringkat</button>
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
                                    <th>#</th>
                                    <!-- <th>Kode Alternatif</th>
                                    <th>Nilai Optimasi</th> -->
                                    <th>Kode Alternatif</th>
                                    <th>Nama Calon Pegawai</th>
                                    <th>Nilai Optimasi</th>

                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $rank = 1;
                                $sorting = $calon_teller;
                                rsort($sorting);
                                ?>

                                <?php foreach ($calon_teller as $c) : ?>


                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>
                                        <td><?php echo "A" . $c->id_akun_calon_pegawai; ?></td>
                                        <td style="text-ucfirst"><?php echo $c->nama_lengkap; ?></td>
                                        <td><?php echo $c->nilai_optimasi; ?></td>
                                        <td>
                                            <?= $rank++; ?>
                                        </td>

                                    </tr>
                                <?php endforeach ?>

                                <!-- <?php $no = 1; ?>

                                <?php foreach ($sorted_rank_data as $key => $value) : ?>
                                    <tr>
                                        <td style="width: 5px;"><?php echo $no++; ?></td>

                                        <td><?php echo "A" . $key; ?></td>

                                        <td><?php echo $value['value']; ?></td>
                                        <td><?php echo $value['rank']; ?></td>
                                    </tr>
                                <?php endforeach ?> -->
                            </tbody>

                        </table>
                        <!-- <form action="<?= base_url('coba/save_nilai') ?>" method="post">
                            <?php foreach ($sorted_rank_data as $key => $value) : ?>
                                <?php foreach ($jumlah_terima as $jt) { ?>

                                    <?php if ($value['rank'] <= $jt->jumlah) { ?>
                                        <?php foreach ($alternatif as $val) { ?>
                                            <input type="hidden" class="form-control" name="id_job[]" value="1">
                                            <input type="hidden" class="form-control" name="id_akun_calon_pegawai[]" value="<?= $val->id_akun_calon_pegawai ?>">
                                            <input type="hidden" class="form-control" name="nilai_optimasi[]" value="<?php echo $value['value']; ?>">
                                            <input type="hidden" class="form-control" name="rank[]" value="<?php echo $value['rank']; ?>">
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach ?>
                            <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" data-target="#modal-kirim"><i class="fa fa-check-circle"></i> Teruskan Ke Pimpinan</button>
                        </form> -->
                        <?php if ($calon_teller == null) { ?>
                            <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" data-target="#modal-kirim" disabled><i class="fa fa-check-circle"></i> Teruskan Ke Pimpinan</button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" data-target="#modal-kirim"><i class="fa fa-check-circle"></i> Teruskan Ke Pimpinan</button>
                        <?php } ?>

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


<div class="modal fade" id="modal-peringkat">
    <div class="modal-dialog ">
        <div class="modal-content">
            <?php echo form_open(base_url('coba/save_peringkat')) ?>
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Set Peringkat</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="callout callout-default">
                        <p>Yakin ingin set peringkat?</p>
                    </div>
                    <?php $no = 1;
                    $ranking = 1;
                    ?>
                    <?php foreach ($tabel_yi as $key => $value) : ?>

                        <tr>
                            <!-- <td style="width: 5px;"><?php echo $no++; ?></td> -->
                            <td><input type="hidden" name="id_job[]" class="form-control" value="1"></td>
                            <td><input type="hidden" name="id_akun_calon_pegawai[]" class="form-control" value="<?= $key; ?>"></td>
                            <!-- <td><?php echo $max[$key]; ?></td> -->
                            <!-- <td><?php echo $min[$key]; ?></td> -->
                            <td><input type="hidden" name="nilai_optimasi[]" class="form-control" value="<?php echo $value; ?>"></td>
                            <!-- <td>
                                <input type="hidden" name="rank[]" class="form-control" value="<?php echo $ranking; ?>">
                            </td> -->

                        </tr>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i> Set Peringkat</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-kirim">
    <div class="modal-dialog ">
        <div class="modal-content">
            <?php echo form_open(base_url('coba/save_nilai')) ?>
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Teruskan Laporan</h4>
            </div>
            <div class="modal-body table-responsive">
                <div class="card-body">
                    <div class="callout callout-default">
                        <p>Yakin meneruskan kepada Pimpinan?</p>
                    </div>


                    <?php $no = 1;
                    $ranking = 1;
                    ?>
                    <?php foreach ($calon_teller as $c) : ?>
                        <?php if ($ranking <= $jt->jumlah) { ?>
                            <tr>
                                <!-- <td style="width: 5px;"><?php echo $no++; ?></td> -->
                                <td><input type="hidden" name="id_job[]" class="form-control" value="1" required></td>
                                <td><input type="hidden" name="id_akun_calon_pegawai[]" class="form-control" value="<?= $c->id_akun_calon_pegawai; ?>"></td>
                                <!-- <td><?php echo $max[$key]; ?></td> -->
                                <!-- <td><?php echo $min[$key]; ?></td> -->
                                <td><input type="hidden" name="nilai_optimasi[]" class="form-control" value="<?php echo $c->nilai_optimasi; ?>"></td>
                                <td>
                                    <input type="hidden" name="rank[]" class="form-control" value="<?php echo $ranking; ?>">
                                </td>
                                <?php $ranking++; ?>
                            </tr>
                        <?php } ?>
                    <?php endforeach ?>


                    <!-- <?php foreach ($sorted_rank_data as $key => $value) : ?>
                        <?php foreach ($jumlah_terima as $jt) { ?>

                            <?php if ($value['rank'] <= $jt->jumlah) { ?>
                                <?php foreach ($alternatif as $val) { ?>
                                    <input type="hidden" class="form-control" name="id_job[]" value="1">
                                    <input type="hidden" class="form-control" name="id_akun_calon_pegawai[]" value="<?= $val->id_akun_calon_pegawai ?>">
                                    <input type="hidden" class="form-control" name="nilai_optimasi[]" value="<?php echo $value['value']; ?>">
                                    <input type="text" class="form-control" name="rank[]" value="<?php echo $value['rank']; ?>">
                                <?php } ?>

                            <?php } ?>
                        <?php } ?>
                    <?php endforeach ?> -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Teruskan Laporan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<?php foreach ($alternatif as $alt) { ?>
    <div class="modal fade" id="modal-delete<?= $alt->id_akun_calon_pegawai ?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <?php echo form_open(base_url('coba/delete_teller')) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body table-responsive">
                    <div class="card-body">
                        <div class="callout callout-primary">
                            <p>Silahkan ceklis semua untuk menghapus.</p>
                        </div>


                        <table class="table table-bordered table-hover table-striped table-sm display" id="table1" width="100%" cellspacing="0">
                            <tr>
                                <th><input type="checkbox" id="check-all<?= $alt->id_akun_calon_pegawai ?>" required></th>
                                <th style="text-align: center;">Centak semua untuk menghapus</th>

                            </tr>
                            <?php foreach ($calon_teller as $t) { ?>
                                <?php if ($alt->id_akun_calon_pegawai == $t->id_akun_calon_pegawai) { ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="check-item" name="id_akun_calon_pegawai[]" value="<?= $t->id_akun_calon_pegawai ?>">

                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="<?= $t->total_nilai ?>" readonly>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </table>


                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="submit" id="btn-delete" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Data</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>

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