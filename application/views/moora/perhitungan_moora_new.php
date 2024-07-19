<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0"><?= $title1; ?></h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <a href="<?= base_url('perhitungan_moora/filter') ?>" class="btn btn-secondary btn-sm">
                            <i class="fa fa-filter"></i> Lihat Rangking Keseluruhan
                        </a>
                    </ol>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Pilih Berdasarkan Posisi yang ingin ditampilkan</h3>

                    <div class="card-tools">
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button> -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-filter"></i> Filter Berdasarkan Posisi</button>
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <?php
                                foreach ($job as $data) { ?>

                                    <?php if ($data->id_job == '1') { ?>
                                        <a class="dropdown-item" href="<?= base_url('perhitungan_moora/posisi_teller') ?>"><?= $data->job ?></a>
                                    <?php } elseif ($data->id_job == '2') { ?>
                                        <a class="dropdown-item" href="<?= base_url('perhitungan_moora/posisi_hrd') ?>"><?= $data->job ?></a>
                                    <?php } elseif ($data->id_job == '3') { ?>
                                        <a class="dropdown-item" href="<?= base_url('perhitungan_moora/posisi_branch_manager') ?>"><?= $data->job ?></a>
                                    <?php } elseif ($data->id_job == '4') { ?>
                                        <a class="dropdown-item" href="<?= base_url('perhitungan_moora/posisi_customer_service') ?>"><?= $data->job ?></a>
                                    <?php } elseif ($data->id_job == '5') { ?>
                                        <a class="dropdown-item" href="<?= base_url('perhitungan_moora/posisi_public_relationship') ?>"><?= $data->job ?></a>
                                    <?php } ?>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class=" card-body">
                    <div class="callout callout-danger bg-danger">
                        <h5>Harap diperhatikan!</h5>
                        <hr class="text-white">
                        <p>Silihan Pilih Berdasarkan pilihan posisi diatas</p>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>