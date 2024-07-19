<div class="content-page">
    <div class="content">
        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
        <!-- Start Content-->
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
                        <form action="<?= base_url('curiculum_vitae/update_data_diri') ?>" method="post">
                            <div class="card-body">

                                <?php if ($data_diri == null) { ?>


                                    <div class="row">
                                        <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                            <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Data Diri</strong></span>
                                            <button type="submit" class="btn btn-sm btn-danger" style="border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right;">
                                                <i class="fa fa-save"></i> Save
                                            </button>
                                            <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                        </div> <!-- end col-->



                                        <hr />
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="mb-3">
                                                <label class="form-label">No. KTP (16 Digit): <span class="text-danger">*</span></label>
                                                <input type="hidden" name="id_akun_calon_pegawai" class="form-control" value="<?=
                                                                                                                                $this->session->userdata('id_akun_calon_pegawai');
                                                                                                                                ?>" maxlength="16">
                                                <input type="text" name="nik" class="form-control" value="<?=
                                                                                                            $this->session->userdata('no_ktp');
                                                                                                            ?>" maxlength="16" disabled>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Email: <span class="text-danger">*</span></label>
                                                <input type="text" name="email" class="form-control" value="<?=
                                                                                                            $this->session->userdata('alamat_email');
                                                                                                            ?>" disabled>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Tempat Lahir: <span class="text-danger">*</span></label>
                                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Jenis Kelamin: <span class="text-danger">*</span></label>
                                                <select name="jenis_kelamin" class="form-control select2" required>
                                                    <option value="">Pilihan</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Agama: <span class="text-danger">*</span></label>
                                                <select name="agama" class="form-control select2">
                                                    <?php
                                                    // echo " <option value=''>Pilihan</option>";
                                                    if ($d->agama == 'Islam') {
                                                        echo "<option value = 'Islam' selected>Islam</option>
                                                            <option value ='Kristen'>Kristen</option>
                                                            <option value ='Protestan'>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                    } elseif ($d->agama == 'Kristen') {
                                                        echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' selected>Kristen</option>
                                                            <option value ='Protestan'>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                    } elseif ($d->agama == 'Protestan') {
                                                        echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' selected>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                    } elseif ($d->agama == 'Hindu') {
                                                        echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' selected>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                    } elseif ($d->agama == 'Budha') {
                                                        echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' selected>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                    } elseif ($d->agama == 'Konhucu') {
                                                        echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' >Budha</option>
                                                            <option value ='Konhucu' selected>Konhucu</option>";
                                                    }
                                                    echo "<option value=''>Pilihan</option>
                                                            <option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' >Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";

                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">

                                            <div class="mb-3">
                                                <label class="form-label">Nama Lengkap (Sesuai KTP)<span class="text-danger">*</span></label>
                                                <input type="text" name="nama_lengkap" class="form-control text-uppercase" placeholder="" value="<?=
                                                                                                                                                    $this->session->userdata('nama_lengkap');
                                                                                                                                                    ?>" disabled>
                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">No. Kontak: <span class="text-danger">*</span></label>
                                                <input type="text" name="kontak" class="form-control" placeholder="Kontak Anda" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Lahir: <span class="text-danger">*</span></label>
                                                <input type="date" name="tanggal_lahir" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Status Perkawinan: <span class="text-danger">*</span></label>
                                                <select name="status_nikah" class="form-control select2" required>

                                                    <?php

                                                    echo " <option selected disabled>Pilihan</option>";
                                                    if ($d->status_nikah == 'Menikah') {
                                                        echo "<option value = 'Menikah' selected>Menikah</option>
                                                            <option value ='Belum Nikah'>Lajang/Single</option>
                                                            <option value ='Janda Duda'>Janda/Duda</option>";
                                                    } elseif ($d->status_nikah == 'Belum Nikah') {
                                                        echo "<option value = 'Menikah'>Menikah</option>
                                                            <option value ='Belum Nikah' selected>Lajang/Single</option>
                                                            <option value ='Janda Duda'>Janda/Duda</option>";
                                                    } elseif ($d->status_nikah == 'Janda Duda') {
                                                        echo "<option value = 'Menikah'>Menikah</option>
                                                            <option value ='Belum Nikah' >Lajang/Single</option>
                                                            <option value ='Janda Duda' selected>Janda/Duda</option>";
                                                    }
                                                    echo "<option value=''>Pilihan</option>
                                                    <option value = 'Menikah'>Menikah</option>
                                                    <option value ='Belum Nikah' >Lajang/Single</option>
                                                    <option value ='Janda Duda'>Janda/Duda</option>";

                                                    ?>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <?php foreach ($data_diri as $d) : ?>
                                        <div class="row">
                                            <div class="col-sm-12" style="background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px">
                                                <span style="font-family: 'Franklin Gothic Medium', sans-serif; font-size: x-large;" class="text-uppercase text-white">Data Diri</strong></span>
                                                <button type="submit" class="btn btn-sm btn-danger" style="border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right;">
                                                    <i class="fa fa-save"></i> Save
                                                </button>
                                                <!-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">erwinwing15@gmail.com</p> -->
                                            </div> <!-- end col-->



                                            <hr />
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label">No. KTP (16 Digit): <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="id_akun_calon_pegawai" class="form-control" value="<?=
                                                                                                                                    $this->session->userdata('id_akun_calon_pegawai');
                                                                                                                                    ?>" maxlength="16">
                                                    <input type="text" name="nik" class="form-control" value="<?= $d->no_ktp ?>" maxlength="16" disabled>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Email: <span class="text-danger">*</span></label>
                                                    <input type="text" name="email" class="form-control" value="<?= $d->alamat_email ?>" disabled>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Tempat Lahir: <span class="text-danger">*</span></label>
                                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= $d->tempat_lahir ?>" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Kelamin: <span class="text-danger">*</span></label>
                                                    <select name="jenis_kelamin" class="form-control select2" required>
                                                        <?php
                                                        echo " <option selected disabled>Pilihan</option>";
                                                        if ($d->jenis_kelamin == 'Laki-laki') {
                                                            echo "<option value = 'Laki-laki' selected>Laki-laki</option>
                                                            <option value ='Perempuan'>Perempuan</option>";
                                                        } else {
                                                            echo "<option value = 'Laki-laki'>Laki-laki</option>
                                                            <option value ='Perempuan' selected>Perempuan</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Agama: <span class="text-danger">*</span></label>
                                                    <select name="agama" class="form-control select2">
                                                        <?php
                                                        // echo " <option value=''>Pilihan</option>";
                                                        if ($d->agama == 'Islam') {
                                                            echo "<option value = 'Islam' selected>Islam</option>
                                                            <option value ='Kristen'>Kristen</option>
                                                            <option value ='Protestan'>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                        } elseif ($d->agama == 'Kristen') {
                                                            echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' selected>Kristen</option>
                                                            <option value ='Protestan'>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                        } elseif ($d->agama == 'Protestan') {
                                                            echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' selected>Protestan</option>
                                                            <option value ='Hindu'>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                        } elseif ($d->agama == 'Hindu') {
                                                            echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' selected>Hindu</option>
                                                            <option value ='Budha'>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                        } elseif ($d->agama == 'Budha') {
                                                            echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' selected>Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";
                                                        } elseif ($d->agama == 'Konhucu') {
                                                            echo "<option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' >Budha</option>
                                                            <option value ='Konhucu' selected>Konhucu</option>";
                                                        }
                                                        echo "<option value=''>Pilihan</option>
                                                            <option value = 'Islam' >Islam</option>
                                                            <option value ='Kristen' >Kristen</option>
                                                            <option value ='Protestan' >Protestan</option>
                                                            <option value ='Hindu' >Hindu</option>
                                                            <option value ='Budha' >Budha</option>
                                                            <option value ='Konhucu'>Konhucu</option>";

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label">Nama Lengkap (Sesuai KTP)<span class="text-danger">*</span></label>
                                                    <input type="text" name="nama_lengkap" class="form-control text-uppercase" placeholder="" value="<?= $d->nama_lengkap ?>" disabled>
                                                </div>



                                                <div class="mb-3">
                                                    <label class="form-label">No. Kontak: <span class="text-danger">*</span></label>
                                                    <input type="text" name="kontak" class="form-control" value="<?= $d->kontak ?>" placeholder="Kontak Anda" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Tanggal Lahir: <span class="text-danger">*</span></label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $d->tanggal_lahir ?>" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Status Perkawinan: <span class="text-danger">*</span></label>
                                                    <select name="status_nikah" class="form-control select2" required>

                                                        <?php

                                                        echo " <option selected disabled>Pilihan</option>";
                                                        if ($d->status_nikah == 'Menikah') {
                                                            echo "<option value = 'Menikah' selected>Menikah</option>
                                                            <option value ='Belum Nikah'>Lajang/Single</option>
                                                            <option value ='Janda Duda'>Janda/Duda</option>";
                                                        } elseif ($d->status_nikah == 'Belum Nikah') {
                                                            echo "<option value = 'Menikah'>Menikah</option>
                                                            <option value ='Belum Nikah' selected>Lajang/Single</option>
                                                            <option value ='Janda Duda'>Janda/Duda</option>";
                                                        } elseif ($d->status_nikah == 'Janda Duda') {
                                                            echo "<option value = 'Menikah'>Menikah</option>
                                                            <option value ='Belum Nikah' >Lajang/Single</option>
                                                            <option value ='Janda Duda' selected>Janda/Duda</option>";
                                                        }
                                                        ?>
                                                    </select>
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