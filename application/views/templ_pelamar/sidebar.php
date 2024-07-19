  <!-- ========== Left Sidebar Start ========== -->
  <div class="leftside-menu">

      <!-- Brand Logo Light -->
      <a href="<?= base_url('my_dashboard') ?>" class="logo logo-light">
          <span class="logo-lg">
              <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo2.png" alt="logo">
          </span>
          <span class="logo-sm">
              <img src="<?= base_url() ?>assets/depan/assets/img/btpn-logo.png" alt="small logo">
          </span>
      </a>

      <!-- Brand Logo Dark -->
      <a href="<?= base_url('my_dashboard') ?>" class="logo logo-dark">
          <span class="logo-lg">
              <img src="<?= base_url() ?>assets/temp_pelamar/assets/images/logo-dark.png" alt="dark logo">
          </span>
          <span class="logo-sm">
              <img src="<?= base_url() ?>assets/temp_pelamar/assets/images/logo-dark-sm.png" alt="small logo">
          </span>
      </a>

      <!-- Sidebar Hover Menu Toggle Button -->
      <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Tampilkan Menu Sidebar">
          <i class="fa fa-bars align-middle"></i>
      </div>

      <!-- Full Sidebar Menu Close Button -->
      <div class="button-close-fullsidebar">
          <i class="fa fa-times align-middle"></i>
      </div>

      <!-- Sidebar -left -->
      <div class="h-100" id="leftside-menu-container" data-simplebar>
          <!-- Leftbar User -->
          <div class="leftbar-user">
              <a href="pages-profile.html">
                  <img src="<?= base_url() ?>assets/temp_pelamar/assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                  <span class="leftbar-user-name mt-2">Dominic Keller</span>
              </a>
          </div>

          <!--- Sidemenu -->
          <ul class="side-nav" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

              <li class="side-nav-title">MAIN MENU</li>

              <li class="side-nav-item">
                  <a href="<?= base_url('my_dashboard') ?>" class="side-nav-link">
                      <i class="fa fa-home"></i>
                      <span> Lamaran Saya </span>
                  </a>
              </li>
              <li class="side-nav-item">
                  <a href="<?= base_url('curiculum_vitae') ?>" class="side-nav-link">
                      <i class="fa fa-file-alt"></i>
                      <span> Daftar Riwayat Hidup </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="<?= base_url('job_vacancy') ?>" class="side-nav-link">
                      <i class="fa fa-building"></i>
                      <span> Lowongan </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="<?= base_url('ujian') ?>" class="side-nav-link">
                      <i class="fa fa-edit"></i>
                      <span> Tes Online </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="<?= base_url('my_mail') ?>" class="side-nav-link">
                      <i class="fa fa-envelope"></i>
                      <span> Kotak Masuk </span>
                  </a>
              </li>



          </ul>
          <!--- End Sidemenu -->

          <div class="clearfix"></div>
      </div>
  </div>
  <!-- ========== Left Sidebar End ========== -->