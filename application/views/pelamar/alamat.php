<div class="content-page">
    <div class="content">
        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-xl-3 col-lg-4">
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



                <div class="col-xl-9 col-lg-8">

                    <div class="card">
                        <form action="<?= base_url('curiculum_vitae/update_alamat') ?>" method="post">
                            <div class="card-body">
                                <?php if ($alamat == null) { ?>
                                    <div class="row">
                                        <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                            <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Alamat</strong></span>
                                            <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                            <button type="submit" class="btn btn-sm btn-danger" style="border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right;">
                                                <i class="fa fa-save"></i> Save
                                            </button>

                                        </div> <!-- end col-->


                                        <hr />
                                    </div> <!-- end row -->
                                    <h4>Alamat KTP</h4>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label">Alamat (Sesuai KTP): <span class="text-danger">*</span></label>
                                            <input type="hidden" name="id_akun_calon_pegawai" class="form-control" value="<?=
                                                                                                                            $this->session->userdata('id_akun_calon_pegawai');
                                                                                                                            ?>">
                                            <textarea name="alamat_ktp" class="form-control" id="alamatktp" cols="10" rows="3" placeholder="Alamat KTP"></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Provinsi: <span class="text-danger">*</span></label>
                                                <select name="provinsi" id="provinsi" class="form-control select2">
                                                    <option disabled selected>- Pilih Provinsi -</option>
                                                    <?php foreach ($provinsi as $prov) {
                                                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Kecamatan: <span class="text-danger">*</span></label>
                                                <select name="kecamatan" id="kecamatan" class="form-control select2" required>
                                                    <option disabled selected>-- Pilih Kecamatan --</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Kabupaten/Kota: <span class="text-danger">*</span></label>
                                                <select name="kota_kab" id="kabupaten" class="form-control select2">
                                                    <option disabled selected>-- Pilih Kabupaten/Kota --</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Kode POS: <span class="text-danger"></span></label>
                                                <input type="text" id="kode_pos" name="kode_pos" class="form-control" maxlength="5" placeholder="Kode POS">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <h4>Alamat Domisili</h4> <input type="checkbox" id="same" name="same" onchange="sameAddres()"> Sama dengan alamat KTP

                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="same">Alamat Domisili: <span class="text-danger">*</span></label>
                                            <textarea name="alamat_domisili" class="form-control" for="same" cols="10" rows="3" placeholder="Alamat Domisili" id="alamatktp2"></textarea>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="mb-3">
                                                <label class="form-label" for="same">Provinsi: <span class="text-danger">*</span></label>
                                                <select name="provinsi_dom" id="provinsid" for="same" class="form-control select2" required>
                                                    <option value="">- Pilih Provinsi -</option>
                                                    <?php foreach ($provinsi as $prov) {
                                                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="same">Kecamatan: <span class="text-danger">*</span></label>
                                                <select name="kecamatan_dom" id="kecamatand" for="same" class="form-control select2" required>
                                                    <option value="">-- Pilih Kecamatan --</option>
                                                </select>
                                            </div>


                                        </div>

                                        <div class="col-lg-6">

                                            <div class="mb-3">
                                                <label class="form-label" for="same">Kabupaten/Kota: <span class="text-danger">*</span></label>
                                                <select name="kota_kab_dom" for="same" id="kabupatend" class="form-control select2" required>
                                                    <option value="">-- Pilih Kabupaten/Kota --</option>
                                                </select>
                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">Kode POS: <span class="text-danger"></span></label>
                                                <input type="text" name="kode_pos_dom" id="kode_poss" maxlength="5" class="form-control" placeholder="Kode POS">
                                            </div>
                                        </div>
                                    </div>

                                <?php } else { ?>
                                    <?php foreach ($alamat as $p) : ?>
                                        <div class="row">
                                            <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Alamat</strong></span>
                                                <button type="submit" class="btn btn-sm btn-danger" style="border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right;">
                                                    <i class="fa fa-save"></i> Save
                                                </button>
                                                <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                            </div> <!-- end col-->



                                            <hr />
                                        </div> <!-- end row -->
                                        <h4>Alamat KTP</h4>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat (Sesuai KTP): <span class="text-danger">*</span></label>
                                                <input type="hidden" name="id_akun_calon_pegawai" class="form-control" value="<?=
                                                                                                                                $this->session->userdata('id_akun_calon_pegawai');
                                                                                                                                ?>">
                                                <textarea name="alamat_ktp" class="form-control" id="alamatktp" cols="10" rows="3" placeholder="Alamat KTP"><?= $p->alamat_ktp ?></textarea>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label">Provinsi: <span class="text-danger">*</span></label>
                                                    <select name="provinsi" id="provinsi" class="form-control select2">
                                                        <option>- Pilih Provinsi -</option>
                                                        <?php foreach ($provinsi as $prov) { ?>

                                                            <option value="<?= $prov->id ?>" <?= $p->provinsi == $prov->id ? 'selected'  : null ?>><?= $prov->nama ?></option>;
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Kecamatan: <span class="text-danger">*</span></label>
                                                    <?php if ($p->kecamatan == null) { ?>
                                                        <select name="kecamatan" id="kecamatan" class="form-control select2" required>
                                                            <option disabled selected>-- Pilih Kecamatan --</option>
                                                        </select>
                                                    <?php } else { ?>
                                                        <select name="kecamatan" id="kecamatan" class="form-control select2">
                                                            <?php foreach ($kecamatan as $kec) { ?>

                                                                <option value="<?= $kec->id ?>" <?= $p->kecamatan == $kec->id ? 'selected'  : null ?>><?= $kec->nama ?></option>;
                                                            <?php } ?>
                                                        </select>
                                                    <?php } ?>
                                                </div>


                                            </div>

                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label">Kabupaten/Kota: <span class="text-danger">*</span></label>
                                                    <?php if ($p->kota_kab == null) { ?>
                                                        <select name="kota_kab" id="kabupaten" class="form-control select2">
                                                            <option disabled selected>-- Pilih Kabupaten/Kota --</option>
                                                        </select>
                                                    <?php } else { ?>
                                                        <select name="kota_kab" id="kabupaten" class="form-control select2">
                                                            <?php foreach ($kabupaten as $kab) { ?>

                                                                <option value="<?= $kab->id ?>" <?= $p->kota_kab == $kab->id ? 'selected'  : null ?>><?= $kab->nama ?></option>;
                                                            <?php } ?>
                                                        </select>
                                                    <?php } ?>
                                                    <!-- <select name="kota_kab" id="kabupaten" class="form-control select2">
                                                        <option disabled selected>-- Pilih Kabupaten/Kota --</option>
                                                    </select> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Kode POS: <span class="text-danger"></span></label>
                                                    <input type="text" id="kode_pos" name="kode_pos" value="<?= $p->kode_pos ?>" class="form-control" maxlength="5" placeholder="Kode POS">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4>Alamat Domisili</h4> <input type="checkbox" id="same" name="same" onchange="sameAddres()"> Sama dengan alamat KTP

                                        <div class="row mt-3">
                                            <div class="mb-3">
                                                <label class="form-label" for="same">Alamat Domisili: <span class="text-danger">*</span></label>
                                                <textarea name="alamat_domisili" class="form-control" for="same" cols="10" rows="3" placeholder="Alamat Domisili" id="alamatktp2"><?= $p->alamat_domisili ?></textarea>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label" for="same">Provinsi: <span class="text-danger">*</span></label>
                                                    <select name="provinsi_dom" id="provinsid" for="same" class="form-control select2" required>
                                                        <option value="">- Pilih Provinsi -</option>
                                                        <?php foreach ($provinsi as $prov) { ?>

                                                            <option value="<?= $prov->id ?>" <?= $p->provinsi_dom == $prov->id ? 'selected'  : null ?>><?= $prov->nama ?></option>;
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="same">Kecamatan: <span class="text-danger">*</span></label>

                                                    <?php if ($p->kecamatan == null) { ?>
                                                        <select name="kecamatan_dom" id="kecamatand" for="same" class="form-control select2" required>
                                                            <option disabled selected>-- Pilih Kecamatan --</option>
                                                        </select>
                                                    <?php } else { ?>
                                                        <select name="kecamatan_dom" id="kecamatand" for="same" class="form-control select2" required>
                                                            <?php foreach ($kecamatan as $kec) { ?>

                                                                <option value="<?= $kec->id ?>" <?= $p->kecamatan_dom == $kec->id ? 'selected'  : null ?>><?= $kec->nama ?></option>;
                                                            <?php } ?>
                                                        </select>
                                                    <?php } ?>


                                                </div>


                                            </div>

                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label" for="same">Kabupaten/Kota: <span class="text-danger">*</span></label>
                                                    <?php if ($p->kota_kab_dom == null) { ?>
                                                        <select name="kota_kab_dom" for="same" id="kabupatend" class="form-control select2" required>
                                                            <option value="">-- Pilih Kabupaten/Kota --</option>
                                                        </select>
                                                    <?php } else { ?>
                                                        <select name="kota_kab_dom" for="same" id="kabupatend" class="form-control select2" required>
                                                            <?php foreach ($kabupaten as $kab) { ?>

                                                                <option value="<?= $kab->id ?>" <?= $p->kota_kab_dom == $kab->id ? 'selected'  : null ?>><?= $kab->nama ?></option>;
                                                            <?php } ?>
                                                        </select>
                                                    <?php } ?>
                                                </div>



                                                <div class="mb-3">
                                                    <label class="form-label">Kode POS: <span class="text-danger"></span></label>
                                                    <input type="text" name="kode_pos_dom" id="kode_poss" maxlength="5" value="<?= $p->kode_pos_dom ?>" class="form-control" placeholder="Kode POS">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </div> <!-- end card body -->
                        </form>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>
    <!-- content -->