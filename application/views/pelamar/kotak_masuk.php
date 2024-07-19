<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">

                        </div>
                        <h4 class="page-title"><?= $title1; ?></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <?php if ($kotak_masuk == null) { ?>

                        <div class="alert alert-danger bg-danger text-white alert-dismissible">
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                            <h4><i class="icon fa fa-ban"></i> Tidak ada pesan masuk</h4>
                            <!-- <hr style="width: 100%;"> -->
                            <p class="mr-4"></p>
                        </div>

                    <?php } else { ?>
                        <?php foreach ($kotak_masuk as $k) { ?>
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="ml-5 mr-5">
                                    
                                        <p class="mt-1 ml-5 mr-5" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Selamat, <?= $k->pesan?></p>
                          
                                        <hr>
                                        <i class="far fa-calendar"></i> <?= $k->tgl_pesan?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>