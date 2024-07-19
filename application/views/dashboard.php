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
    <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
    <div class="container-fluid">

      <?php if ($this->session->userdata('role_id') == 1) { ?>
        <div class="callout callout-success shadow bg-success">
        <?php } else if ($this->session->userdata('role_id') == 2) { ?>
          <div class="callout callout-warning shadow bg-purple">
          <?php } ?>
          <h5>Selamat Datang, <?=
                              $this->session->userdata('nama_pengguna');
                              ?></h5>
          <hr class="text-white" style="border: 1px solid #ffff;">

          <p>Anda adalah login sebagai
            <?php if ($this->session->userdata('role_id') == '1') { ?>
              <b>Pimpinan</b>
            <?php }
            if ($this->session->userdata('role_id') == '2') { ?>
              <b>HRD</b>
            <?php } ?>
          </p>

          </div>

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $pengguna; ?></h3>

                  <p>Pengguna Sistem</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $kriteria; ?></h3>

                  <p>Daftar Kriteria</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-list"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $calon_pegawai ?></h3>

                  <p>Jumlah Calon Pegawai</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>MOORA</h3>

                  <p>Perangkingan MOORA</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->


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