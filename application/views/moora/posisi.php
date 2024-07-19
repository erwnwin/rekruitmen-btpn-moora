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
            <?php foreach ($lihat as $key => $li) { ?>
                <?php if ($li->id_job == '1') { ?>
                    Seller
                <?php } ?>
            <?php } ?>
        </div>
    </section>
</div>