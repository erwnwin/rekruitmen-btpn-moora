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
                    <h3 class="card-title">History Ujian</h3>

                    <div class="card-tools">
                        <a href="<?= base_url('ujian_master/buat_ujian') ?>" class="btn bg-purple btn-flat btn-sm"><i class="fa fa-file-alt"></i> Buat Ujian Baru</a>
                        <!-- <a href="<?= base_url('ujian_master') ?>" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-arrow-left"></i> </a> -->

                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">


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


<script src="<?= base_url() ?>assets/dist/js/app/soal/data.js"></script>