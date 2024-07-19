<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <?php foreach ($job1 as $j) { ?>
                <?php foreach ($lamar as $l) { ?>

                    <?php if ($j->id_jurusan == $lamar->id_jurusan) { ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title"><?= $title1; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ($j->id_jurusan != $lamar->id_jurusan) { ?>
                        <h2>MAAF <?= $j->id_jurusan ?> : <?= $j->job ?> <?= $l->id_jurusan ?></h2>
                    <?php  } ?>
                <?php } ?>
            <?php } ?>