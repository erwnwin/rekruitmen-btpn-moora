 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url('dashboard') ?>" class="brand-link">
     <img src="<?= base_url() ?>/assets/images/btpn-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light"><strong>BANK BTPN</strong></span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url() ?>/assets/images/user.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="<?= base_url('profil') ?>" class="d-block">
           <?php if (
              $this->session->userdata('role_id') == 1
            ) {
              echo $this->session->userdata('nama_pengguna');
            } elseif ($this->session->userdata('role_id') == 2) {
              echo $this->session->userdata('nama_pengguna');
            }
            ?></a>
       </div>
     </div>



     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




         <li class="nav-item">
           <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('profil') ?>" class="nav-link <?= $this->uri->segment(1) == 'profil' ? 'active' : '' ?>">
             <i class="nav-icon far fa-user"></i>
             <p>
               Profil
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('bantuan') ?>" class="nav-link <?= $this->uri->segment(1) == 'bantuan' ? 'active' : '' ?>">
             <i class="nav-icon far fa-question-circle"></i>
             <p>
               Bantuan
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('dashboard/logout') ?>" class="nav-link">
             <i class="nav-icon fas fa-power-off"></i>
             <p>
               Logout
             </p>
           </a>
         </li>


         <?php if (
            $this->session->userdata('role_id') == '2'
          ) { ?>
           <li class="nav-header text-center"><i class="fas fa-star"></i> <b>ADMIN ~ HRD</b> <i class="fas fa-star"></i></li>
           <li class="nav-item">
             <a href="<?= base_url('pengguna') ?>" class="nav-link <?= $this->uri->segment(1) == 'pengguna' ? 'active' : '' ?> ">
               <i class="nav-icon fas fa-user-friends"></i>
               <p>
                 Pengguna
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url('lowongan') ?>" class="nav-link <?= $this->uri->segment(1) == 'lowongan' ? 'active' : '' ?>">
               <i class="nav-icon far fa-user"></i>
               <p>
                 Lowongan
               </p>
             </a>
           </li>
           <li class="nav-item <?= $this->uri->segment(1) == 'kriteria' || $this->uri->segment(1) == 'sub_kriteria' || $this->uri->segment(1) == '' ? 'menu-open' : ''
                                ?>">
             <a href="#" class="nav-link <?= $this->uri->segment(1) == 'kriteria' || $this->uri->segment(1) == 'sub_kriteria' || $this->uri->segment(1) == '' ? 'active' : ''
                                          ?>">
               <i class="nav-icon fas fa-list"></i>
               <p>
                 Data Kriteria
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?= base_url('kriteria') ?>" class="nav-link <?= $this->uri->segment(1) == 'kriteria' ? 'active' : ''
                                                                        ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Kriteria</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('sub_kriteria') ?>" class="nav-link <?= $this->uri->segment(1) == 'sub_kriteria' ? 'active' : ''
                                                                            ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Sub Kriteria</p>
                 </a>
               </li>
             </ul>
           </li>





           <li class="nav-item <?= $this->uri->segment(1) == 'bank_soal' || $this->uri->segment(1) == 'hasil_ujian' || $this->uri->segment(1) == 'peserta_ujian' || $this->uri->segment(1) == '' ? 'menu-open' : ''
                                ?>">
             <a href="#" class="nav-link <?= $this->uri->segment(1) == 'bank_soal' || $this->uri->segment(1) == 'hasil_ujian' || $this->uri->segment(1) == 'peserta_ujian' || $this->uri->segment(1) == '' ? 'active' : ''
                                          ?>">
               <i class="nav-icon fas fa-file-alt"></i>
               <p>
                 Setting Ujian
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?= base_url('bank_soal') ?>" class="nav-link <?= $this->uri->segment(1) == 'bank_soal' ? 'active' : ''
                                                                        ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Bank Soal</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('peserta_ujian') ?>" class="nav-link <?= $this->uri->segment(1) == 'peserta_ujian' ? 'active' : ''
                                                                            ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Peserta Ujian</p>
                 </a>
               </li>
               <!-- <li class="nav-item">
                 <a href="<?= base_url('hasil_ujian') ?>" class="nav-link <?= $this->uri->segment(1) == 'hasil_ujian' ? 'active' : ''
                                                                          ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Hasil Ujian</p>
                 </a>
               </li> -->
             </ul>
           </li>


           <li class="nav-item">
             <a href="<?= base_url('alternatif_penilaian') ?>" class="nav-link <?= $this->uri->segment(1) == 'alternatif_penilaian' ? 'active' : ''
                                                                                ?>">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                 Nilai Calon Pegawai
               </p>
             </a>
           </li>


           <li class="nav-item">
             <a href="<?= base_url('perhitungan_moora') ?>" class="nav-link <?= $this->uri->segment(1) == 'perhitungan_moora' ? 'active' : ''
                                                                            ?>">
               <i class="nav-icon fas fa-file-alt"></i>
               <p>
                 Perangkingan MOORA
               </p>
             </a>
           </li>


           <!-- <li class="nav-item">
           <a href="<?= base_url('calon_pegawai') ?>" class="nav-link <?= $this->uri->segment(1) == 'calon_pegawai' ? 'active' : '' ?> ">
             <i class="nav-icon fas fa-users"></i>
             <p>
               Calon Pegawai
             </p>
           </a>
         </li> -->

           <!-- Perangkingan MOORA -->
           <!-- <li class="nav-item <?= $this->uri->segment(1) == 'alternatif_penilaian' || $this->uri->segment(1) == 'perhitungan_moora' || $this->uri->segment(1) == 'alternatif'  ? 'menu-open' : ''
                                    ?>">
             <a href="#" class="nav-link <?= $this->uri->segment(1) == 'alternatif_penilaian' || $this->uri->segment(1) == 'perhitungan_moora' || $this->uri->segment(1) == 'alternatif' ? 'active' : ''
                                          ?>">
               <i class="nav-icon fas fa-file-alt"></i>
               <p>
                 Calon Pegawai
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?= base_url('alternatif') ?>" class="nav-link <?= $this->uri->segment(1) == 'alternatif' ? 'active' : ''
                                                                          ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p> Calon Pegawai</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('alternatif_penilaian') ?>" class="nav-link <?= $this->uri->segment(1) == 'alternatif_penilaian' ? 'active' : ''
                                                                                    ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Nilai Calon Pegawai</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('perhitungan_moora') ?>" class="nav-link <?= $this->uri->segment(1) == 'perhitungan_moora' ? 'active' : ''
                                                                                ?>">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Perangkingan Moora</p>
                 </a>
               </li>
             </ul>
           </li> -->

         <?php } ?>

         <?php if (
            $this->session->userdata('role_id') == '1'
          ) { ?>
           <li class="nav-header text-center"><i class="fas fa-star"></i> PIMPINAN <i class="fas fa-star"></i></li>

           <li class="nav-item">
             <a href="<?= base_url('alternatif') ?>" class="nav-link <?= $this->uri->segment(1) == 'alternatif' ? 'active' : ''
                                                                      ?>">
               <i class="nav-icon fas fa-users"></i>
               <p>
                 Calon Pegawai
               </p>
             </a>
           </li>


           <li class="nav-item">
             <a href="<?= base_url('hasil_penilaian') ?>" class="nav-link <?= $this->uri->segment(1) == 'hasil_penilaian' ? 'active' : ''
                                                                          ?>">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                 Hasil Penilaian
               </p>
             </a>
           </li>

           <!-- <li class="nav-item">
             <a href="<?= base_url('perhitungan_moora') ?>" class="nav-link <?= $this->uri->segment(1) == 'perhitungan_moora' ? 'active' : ''
                                                                            ?>">
               <i class="nav-icon fas fa-file-alt"></i>
               <p>
                 Perangkingan MOORA
               </p>
             </a>
           </li> -->

         <?php } ?>




       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>