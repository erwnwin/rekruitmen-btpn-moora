<div class="content-page">
    <div class="content">
        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-3">
                <div class="col-xl-3 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body" style="background-color: ghostwhite;">

                            <div class="text-start">

                                <center> <a href="<?= base_url('curiculum_vitae') ?>" class="btn btn-warning mb-2" style="border-radius: 25px; padding-left: 87px; padding-right: 87px;">
                                        Lihat CV
                                    </a></center>


                                <center> <a href="<?= base_url('curiculum_vitae') ?>" class="btn btn-info mb-2" style="border-radius: 25px; padding-left: 75px; padding-right: 75px;">
                                        Photo Profile
                                    </a></center>
                                <hr>
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-1">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/data_diri') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Data Diri <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/pendidikan') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Pendidikan <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/alamat') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Alamat <span class="text-danger">*</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/pengalaman_kerja') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Pengalaman Kerja
                                        </a>
                                    </li>

                                </ul>



                                <!-- <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/skill') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Skill/Keterampilan
                                        </a>
                                    </li>

                                </ul> -->



                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-2">
                                    <li class="nav-item">
                                        <a href="<?= base_url('curiculum_vitae_final/dokumen_kelengkapan') ?>" style="background-color: antiquewhite;" class="nav-link rounded-0 text-dark">
                                            Dokumen Kelengkapan <span class="text-danger">*</span>
                                        </a>
                                    </li>

                                </ul>





                            </div>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->



                </div> <!-- end col-->



                <div class="col-xl-9 col-lg-9">
                    <form action="<?= base_url('curiculum_vitae_final/update') ?>" method="post">

                        <div class="card">
                            <div class="card-body">
                                <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 25px; padding-right: 25px; float: right; margin-left: 10px; background-color: cornflowerblue;">
                                    <i class="fa fa-save"></i> Save
                                </button>
                                <!-- <button type="button" class="btn btn-secondary" id="btn-tambah-form" style="border-radius: 25px; padding-left: 25px; padding-right: 25px; float: right; ">
                                    <i class="fa fa-plus-circle"></i> Tambah Pendidikan
                                </button> -->


                            </div>
                        </div>


                        <div id="insert-form"></div>


                        <div class="card">



                            <div class="card-body">
                                <?php if ($pendidikan == null) { ?>
                                    <div class="row">
                                        <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                            <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Pendidikan Terakhir</strong></span>
                                            <!-- <a href="<?= base_url('curiculum_vitae_final/pendidikan_delete/' . $pendidikan->id_akun_calon_pegawai) ?>" type="submit" class="btn btn-danger" id="btn-hapus" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; float: right;">
                                                <i class="fa fa-trash"></i>
                                            </a> -->

                                            <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                        </div> <!-- end col-->

                                        <hr>

                                    </div> <!-- end row -->
                                    <!-- <select id="test" name="form_select" class="form-control" onchange="showDiv('hidden_div', this)">
                                                <option value="0">DisAgree</option>
                                                <option value="1">Agree</option>
                                            </select> -->



                                    <div class="row">

                                        <div class="col-lg-4">

                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="id_akun_calon_pegawai" value="<?= $user['id_akun_calon_pegawai'] ?>" hidden>
                                                <label class="form-label">Jenjang Pendidikan: <span class="text-danger">*</span></label>
                                                <select name="jenjang_pendidikan" id="jenjang" class="form-control select2">

                                                    <?php

                                                    echo " <option selected disabled>Pilihan</option>";
                                                    if ($p->jenjang_pendidikan == 'SMA/SMK') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK' selected>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                    } elseif ($p->jenjang_pendidikan == 'Diploma III') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                       <option data-maksnilai='4,00' value='Diploma III' selected>Diploma III </option>
                                                       <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                       <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                       <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                       <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                    } elseif ($p->jenjang_pendidikan == 'Diploma IV') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV' selected>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                    } elseif ($p->jenjang_pendidikan == 'S1-Perguruan Tinggi') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi' selected>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                    } elseif ($p->jenjang_pendidikan == 'S2-Pasca Sarjana') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana' selected>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                    } elseif ($p->jenjang_pendidikan == 'S3-Doktor') {
                                                        echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor' selected>S3-Doktor </option>";
                                                    }
                                                    echo "  <option value=''>Pilihan</option>
                                                    <option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                    <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                    <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                    <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                    <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                    <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";

                                                    ?>


                                                </select>


                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                <label class="form-label">Detail Nama Jurusan: <span class="text-danger">*</span></label>
                                                <select name="id_jurusan" id="jurusan" class="form-control select2" onchange="showDivJurusan('hidden_div11', this)">
                                                    <option value="">Pilihan</option>
                                                    <option value="00">Lainnya</option>
                                                    <!-- <?php foreach ($jurusan as $k) {
                                                                echo '<option value="' . $k->id_jurusan . '">' . $k->jurusan . '</option>';
                                                            } ?> -->


                                                    <?php
                                                    foreach ($jurusan as $key => $k) {
                                                        $selected = ($k->id_jurusan == $p->id_jurusan) ? 'selected' : ''; // bikin kondisi kaya gini
                                                    ?>
                                                        <option value="<?= $k->id_jurusan; ?>" <?= $selected; ?> class=""><?= $k->jurusan; ?></option>
                                                    <?php } ?>

                                                </select>
                                                <span class="text-danger" style="font-size: 12px;">
                                                    <p>*Pilih Lainnya, jika tidak ada</p>
                                                </span>

                                                <input type="text" id="hidden_div11" name="jurusan_opsi" class="form-control" placeholder="Input Jurusan Anda">

                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">Status Lulus: <span class="text-danger">*</span></label>
                                                <select name="status_lulus" class="form-control select2">
                                                    <option value="">Pilihan</option>
                                                    <option value="Lulus">Lulus</option>
                                                    <option value="Belum Lulus">Belum Lulus</option>
                                                    <?php

                                                    // echo " <option selected disabled>Pilihan</option>";
                                                    // if ($p->status_lulus == 'Lulus') {
                                                    //     echo "<option value = 'Lulus' selected>Lulus</option>
                                                    //         <option value ='Belum Lulus'>Belum Lulus</option>";
                                                    // } else {
                                                    //     echo "<option value = 'Lulus'>Lulus</option>
                                                    //         <option value ='Belum Lulus' selected>Belum Lulus</option>";
                                                    // }
                                                    // 
                                                    ?>

                                                    <!-- <option value="Lulus">Lulus</option>
                                                    <option value="Belum Lulus">Belum Lulus </option> -->

                                                </select>


                                            </div>




                                            <span class="text-danger" style="font-size: 15px;"> <b>(*) Data wajib diisi</b></span>
                                        </div>

                                        <div class="col-lg-4">

                                            <div class="mb-3">
                                                <label class="form-label">Kota Institusi:<span class="text-danger">*</span></label>
                                                <select name="kota_institusi" id="kota" class="form-control select2">
                                                    <option value="">Pilihan</option>

                                                    <?php
                                                    foreach ($kota as $key => $k) {
                                                        $selected = ($k->id == $p->kota_institusi) ? 'selected' : ''; // bikin kondisi kaya gini
                                                    ?>
                                                        <option value="<?= $k->id; ?>" <?= $selected; ?>><?= $k->nama; ?></option>
                                                    <?php } ?>



                                                    <!--  -->

                                                </select>
                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Sekolah/ Perguruan Tinggi:: <span class="text-danger">*</span></label>
                                                <select name="status_kampus" class="form-control select2">
                                                    <?php

                                                    echo " <option value=''>Pilihan</option>";
                                                    if ($p->status_kampus == 'Negeri') {
                                                        echo "<option value = 'Negeri' selected>Negeri</option>
                                                            <option value ='Swasta'>Swasta</option>";
                                                    } elseif ($p->status_kampus == 'Swasta') {
                                                        echo "<option value = 'Negeri'>Negeri</option>
                                                            <option value ='Swasta' selected>Swasta</option>";
                                                    } else {
                                                        echo "<option value = 'Negeri'>Negeri</option>
                                                        <option value ='Swasta'>Swasta</option>";
                                                    }
                                                    ?>
                                                    <!-- 
                                                    <option value="Negeri">Negeri</option>
                                                    <option value="Swasta">Swasta </option> -->

                                                </select>
                                            </div>

                                            <div class="mb-3 mt-3">
                                                <label class="form-label">IPK/Nilai Rata-rata Ujian Sekolah: <span class="text-danger">*</span></label>
                                                <input type="text" name="ipk" class="form-control" placeholder="IPK/Nilai" autocomplete="off" maxlength="4" value="">
                                                <span class="text-danger" style="font-size: 12px;">
                                                    <p>*contoh nilai IPK D-III/D-IV/S-1/S-2: 3,00 <br> *contoh nilai SMA: 85</p>

                                                </span>
                                            </div>



                                        </div>

                                        <div class="col-lg-4">

                                            <div class="mb-3">
                                                <label class="form-label">Asal Kampus: <span class="text-danger">*</span></label>
                                                <select name="asal_kampus" id="kampus" class="form-control select2" onchange="showDiv('hidden_div', this)">
                                                    <option value="">Pilihan</option>
                                                    <!-- <option value='ada'>Lainnya</option>
                                                    <?php
                                                    foreach ($kampus as $key => $k) {
                                                        $selected = ($k->id == $p->asal_kampus) ? 'selected' : ''; // bikin kondisi kaya gini
                                                    ?>


                                                        <option value="<?= $k->id; ?>" <?= $selected; ?> class=""><?= $k->nama; ?></option>
                                                    <?php } ?> -->
                                                </select>

                                                <span class="text-danger" style="font-size: 12px;">
                                                    <p>*Pilih Lainnya, jika tidak ada</p>
                                                </span>

                                            </div>
                                            <div class="mb-3">
                                                <input type="text" id="hidden_div" name="kampus_opsi" class="form-control" placeholder="Asal Kampus Anda">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Ijazah: <span class="text-danger">*</span></label>
                                                <input type="date" name="tgl_ijazah" class="form-control" placeholder="NIM/NIS">
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label">Dari Maksimal: <span class="text-danger">*</span></label>
                                                <input type="text" name="maksnilai" class="form-control" placeholder="Maksimal IPK/Nilai" readonly disabled>
                                            </div>
                                        </div>

                                    </div>
                                <?php } else { ?>
                                    <?php foreach ($pendidikan as $p) : ?>




                                        <div class="row">
                                            <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Pendidikan Terakhir</strong></span>
                                                <a href="<?= base_url('curiculum_vitae_final/pendidikan_delete/' . $p->id_akun_calon_pegawai) ?>" type="submit" class="btn btn-danger" id="btn-hapus" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; float: right;">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                                <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                            </div> <!-- end col-->

                                            <hr>

                                        </div> <!-- end row -->
                                        <!-- <select id="test" name="form_select" class="form-control" onchange="showDiv('hidden_div', this)">
                                    <option value="0">DisAgree</option>
                                    <option value="1">Agree</option>
                                </select> -->



                                        <div class="row">

                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="id_akun_calon_pegawai" value="<?= $user['id_akun_calon_pegawai'] ?>" hidden>
                                                    <label class="form-label">Jenjang Pendidikan: <span class="text-danger">*</span></label>
                                                    <select name="jenjang_pendidikan" id="jenjang" class="form-control select2">
                                                        <?php
                                                        echo " <option selected disabled>Pilihan</option>";
                                                        if ($p->jenjang_pendidikan == 'SMA/SMK') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK' selected>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        } elseif ($p->jenjang_pendidikan == 'Diploma III') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                       <option data-maksnilai='4,00' value='Diploma III' selected>Diploma III </option>
                                                       <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                       <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                       <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                       <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        } elseif ($p->jenjang_pendidikan == 'Diploma IV') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV' selected>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        } elseif ($p->jenjang_pendidikan == 'S1-Perguruan Tinggi') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi' selected>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        } elseif ($p->jenjang_pendidikan == 'S2-Pasca Sarjana') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana' selected>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        } elseif ($p->jenjang_pendidikan == 'S3-Doktor') {
                                                            echo "<option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor' selected>S3-Doktor </option>";
                                                        }
                                                        echo "  <option value=''>Pilihan</option>
                                                        <option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                        <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                        <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                        <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                        <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                        <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option>";
                                                        ?>

                                                        <!-- <option value="">Pilihan</option>
                                                    <option data-maksnilai='100' value='SMA/SMK'>SMA/SMK</option>
                                                    <option data-maksnilai='4,00' value='Diploma III'>Diploma III </option>
                                                    <option data-maksnilai='4,00' value='Diploma IV'>Diploma IV </option>
                                                    <option data-maksnilai='4,00' value='S1-Perguruan Tinggi'>S1-Perguruan Tinggi </option>
                                                    <option data-maksnilai='4,00' value='S2-Pasca Sarjana'>S2-Pasca Sarjana </option>
                                                    <option data-maksnilai='4,00' value='S3-Doktor'>S3-Doktor </option> -->
                                                    </select>
                                                    <?php echo form_error('jenjang_pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>

                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label class="form-label">Detail Nama Jurusan: <span class="text-danger">*</span></label>
                                                    <select name="id_jurusan" id="jurusan" class="form-control select2" onchange="showDivJurusan('hidden_div11', this)">
                                                        <option value="">Pilihan</option>
                                                        <option value="00">Lainnya</option>
                                                        <!-- <?php foreach ($jurusan as $k) {
                                                                    echo '<option value="' . $k->id_jurusan . '">' . $k->jurusan . '</option>';
                                                                } ?> -->


                                                        <?php
                                                        foreach ($jurusan as $key => $k) {
                                                            $selected = ($k->id_jurusan == $p->id_jurusan) ? 'selected' : ''; // bikin kondisi kaya gini
                                                        ?>
                                                            <option value="<?= $k->id_jurusan; ?>" <?= $selected; ?> class=""><?= $k->jurusan; ?></option>
                                                        <?php } ?>

                                                    </select>
                                                    <span class="text-danger" style="font-size: 12px;">
                                                        <p>*Pilih Lainnya, jika tidak ada</p>
                                                    </span>

                                                    <?php if ($p->id_jurusan == false) { ?>
                                                        <input type="text" name="jurusan_opsi" class="form-control" value="<?= $p->jurusan_opsi ?>">
                                                    <?php } elseif ($p->id_jurusan == true) { ?>
                                                        <input type="text" id="hidden_div11" name="jurusan_opsi" class="form-control" placeholder="Input Jurusan Anda">
                                                    <?php } ?>

                                                </div>



                                                <div class="mb-3">
                                                    <label class="form-label">Status Lulus: <span class="text-danger">*</span></label>
                                                    <select name="status_lulus" class="form-control select2">

                                                        <?php

                                                        echo " <option selected disabled>Pilihan</option>";
                                                        if ($p->status_lulus == 'Lulus') {
                                                            echo "<option value = 'Lulus' selected>Lulus</option>
                                                            <option value ='Belum Lulus'>Belum Lulus</option>";
                                                        } else {
                                                            echo "<option value = 'Lulus'>Lulus</option>
                                                            <option value ='Belum Lulus' selected>Belum Lulus</option>";
                                                        }
                                                        ?>

                                                        <!-- <option value="Lulus">Lulus</option>
                                                    <option value="Belum Lulus">Belum Lulus </option> -->

                                                    </select>


                                                </div>




                                                <span class="text-danger" style="font-size: 15px;"> <b>(*) Data wajib diisi</b></span>
                                            </div>

                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label">Kota Institusi:<span class="text-danger">*</span></label>
                                                    <select name="kota_institusi" id="kota" class="form-control select2">
                                                        <option value="">Pilihan</option>
                                                        <?php
                                                        foreach ($kota as $key => $k) {
                                                            $selected = ($k->id == $p->kota_institusi) ? 'selected' : ''; // bikin kondisi kaya gini
                                                        ?>
                                                            <option value="<?= $k->id; ?>" <?= $selected; ?>><?= $k->nama; ?></option>
                                                        <?php } ?>



                                                        <!--  -->

                                                    </select>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Sekolah/ Perguruan Tinggi:: <span class="text-danger">*</span></label>
                                                    <select name="status_kampus" class="form-control select2">
                                                        <?php

                                                        echo " <option value=''>Pilihan</option>";
                                                        if ($p->status_kampus == 'Negeri') {
                                                            echo "<option value = 'Negeri' selected>Negeri</option>
                                                            <option value ='Swasta'>Swasta</option>";
                                                        } elseif ($p->status_kampus == 'Swasta') {
                                                            echo "<option value = 'Negeri'>Negeri</option>
                                                            <option value ='Swasta' selected>Swasta</option>";
                                                        } else {
                                                            echo "<option value = 'Negeri'>Negeri</option>
                                                        <option value ='Swasta'>Swasta</option>";
                                                        }
                                                        ?>
                                                        <!-- 
                                                    <option value="Negeri">Negeri</option>
                                                    <option value="Swasta">Swasta </option> -->

                                                    </select>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label class="form-label">IPK/Nilai Rata-rata Ujian Sekolah: <span class="text-danger">*</span></label>
                                                    <input type="text" name="ipk" class="form-control" placeholder="IPK/Nilai" autocomplete="off" maxlength="4" value="<?= $p->ipk ?>">
                                                    <span class="text-danger" style="font-size: 12px;">
                                                        <p>*contoh nilai IPK D-III/D-IV/S-1/S-2: 3,00 <br> *contoh nilai SMA: 85</p>

                                                    </span>
                                                </div>



                                            </div>

                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label">Asal Kampus: <span class="text-danger">*</span></label>
                                                    <select name="asal_kampus" id="kampus" class="form-control select2" onchange="showDiv('hidden_div', this)">
                                                        <option value="">Pilihan</option>
                                                        <option value='0'>Lainnya</option>
                                                        <?php
                                                        foreach ($kampus as $key => $k) {
                                                            $selected = ($k->id == $p->asal_kampus) ? 'selected' : ''; // bikin kondisi kaya gini
                                                        ?>


                                                            <option value="<?= $k->id; ?>" <?= $selected; ?> class=""><?= $k->nama; ?></option>
                                                        <?php } ?>
                                                    </select>

                                                    <span class="text-danger" style="font-size: 12px;">
                                                        <p>*Pilih Lainnya, jika tidak ada</p>
                                                    </span>

                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" id="hidden_div" name="kampus_opsi" class="form-control" placeholder="Asal Kampus Anda">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Tanggal Ijazah: <span class="text-danger">*</span></label>
                                                    <input type="date" name="tgl_ijazah" class="form-control" placeholder="NIM/NIS" value="<?= $p->tgl_ijazah ?>">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Dari Maksimal: <span class="text-danger">*</span></label>
                                                    <input type="text" name="maksnilai" class="form-control" placeholder="Maksimal IPK/Nilai" readonly disabled>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>
                                <?php } ?>

                            </div> <!-- end card body -->

                        </div> <!-- end card -->

                    </form>
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->


    </div>
    <!-- content -->