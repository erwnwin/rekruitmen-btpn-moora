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