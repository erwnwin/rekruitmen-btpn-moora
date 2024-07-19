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
                    <?php if ($peserta == null) { ?>

                        <div class="alert alert-warning bg-warning text-white alert-dismissible">
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                            <h4><i class="icon fa fa-ban"></i> Belum ada jadwal terkait. Pantau terus jadwal Ujian Online Saudara/i</h4>
                            <!-- <hr style="width: 100%;"> -->
                            <p class="mr-4"></p>
                        </div>

                    <?php } else { ?>
                        <?php foreach ($peserta as $d) { ?>
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="ml-5 mr-5">

                                        <center>
                                            <p class="mt-1 ml-5 mr-5 text-uppercase" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><i class="fa fa-star"></i> <b><?= $d->jenis_ujian ?></b> <i class="fa fa-star"></i></p>
                                        </center>
                                        <hr>
                                        <table id="data" class="table table-bordered table-striped table-responsive">

                                            <?php
                                            $no = 1;
                                            ?>
                                            <tr>
                                                <th style='width: 300px'>Nama UJIAN</th>
                                                <td><?php echo $d->jenis_ujian; ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Alamat Email</th>
                                                <td style='width: 900px'><?php echo $this->session->userdata('alamat_email') ?></td>
                                            </tr>

                                            <tr>
                                                <th style='width: 300px'>Nama Lengkap</th>
                                                <td style='width: 900px'><?php echo $this->session->userdata('nama_lengkap') ?></td>
                                            </tr>
                                            <tr>
                                                <th style='width: 300px'>Waktu Ujian</th>
                                                <td><?php echo date('d-m-Y', strtotime($d->tanggal_ujian)); ?> | <?php echo date('H:i:s', strtotime($d->jam_ujian)); ?> WITA </td>
                                            </tr>

                                            <tr>
                                                <th style='width: 300px'>Durasi Ujian</th>
                                                <td><?php echo $d->durasi_ujian; ?> Menit</td>
                                            </tr>

                                            <tr>
                                                <th style='width: 300px'>STATUS</th>
                                                <td>
                                                    <?php if ($d->status_ujian == 0) {
                                                        echo "<span> Belum Mulai Ujian </span>";
                                                    } else if ($d->status_ujian == 2) {
                                                        echo "<span> Sudah Mengikuti Ujian </span>";
                                                    } else if ($d->status_ujian == 1) {
                                                        if ($d->status_ujian == 1) {
                                                            if (Date('d-m-Y', strtotime($d->tanggal_ujian)) == Date('d-m-Y') && Date('H:i:s', strtotime($d->jam_ujian)) <= Date('H:i:s')) {
                                                                echo "<a href='" . 'ujian/mulai_ujian/' . "$d->id_peserta' class='btn btn-xs btn-success';'><i class='fa fa-edit'></i> Mulai Ujian</a>";
                                                            } else if (Date('d-m-Y', strtotime($d->tanggal_ujian)) == Date('d-m-Y') && Date('H:i:s', strtotime($d->jam_ujian)) <= Date('H:i:s')) {
                                                                echo "Waktu Ujian Habis";
                                                            } else {
                                                                echo "<span class='text-danger'>Tunggu Waktu Ujian</span>";
                                                            }
                                                        }
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- <table>
                                            <tr>
                                                <td><i class="far fa-calendar"></i> <strong>Dilaksanakan pada :</strong> <span class="text-danger"><?= $d->tanggal_ujian ?> | <?= $k->jam_ujian ?> WITA</span></td>

                                            </tr>
                                            <tr>
                                                <td> <i class="far fa-clock"></i><strong> Durasi :</strong> <?= $d->durasi_ujian ?> Menit</td>
                                            </tr>
                                        </table>
                                        <div class="mt-2 ml-5">
                                            <a href="<?= base_url('ujian/ikuti_tes/' . $d->id_ujian) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Ikuti Ujian</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>