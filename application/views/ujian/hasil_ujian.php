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
            <?= $this->session->flashdata('message'); ?>


            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">Tambah Peserta Ujian</h3>

                    <div class="card-tools">
                        <!-- <a href="<?= base_url('peserta_ujian/tambah_peserta') ?>"><button type="button" class="btn bg-purple btn-flat btn-sm" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah Peserta</button></a> -->
                    </div>
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action="" method="get">
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Posisi/Jabatan</label>
                                <div class=" col-sm-10">
                                    <select class="select2 form-control" name="job_vacancy" required="">
                                        <option value="">Pilihan</option>
                                        <?php
                                        foreach ($job as $data) {  ?>
                                            <option value="<?= $data->id_job ?>"><?= $data->job ?></option>
                                        <?php  }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-sm btn-primary btn-flat" title="Pilih Lowongan">Filter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(function() {
        $('#data').dataTable();
    });
    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->