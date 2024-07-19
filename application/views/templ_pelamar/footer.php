            <!-- Footer Start -->
            <footer class="footer" style="background-color: white;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <strong>© EngMars Corp.</strong>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">Versi 1.0</a>
                                <!-- <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            </div>
            <!-- END wrapper -->



            <!-- Vendor js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/js/vendor.min.js"></script>

            <!-- Daterangepicker js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/vendor/daterangepicker/moment.min.js"></script>
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/vendor/daterangepicker/daterangepicker.js"></script>

            <!-- Apex Charts js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/vendor/apexcharts/apexcharts.min.js"></script>

            <!-- Vector Map js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

            <!-- Dashboard App js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/js/pages/demo.dashboard.js"></script>

            <!-- App js -->
            <script src="<?= base_url() ?>assets/temp_pelamar/assets/js/app.min.js"></script>

            <!-- <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script> -->
            <script src="<?= base_url() ?>/assets/template/plugins/select2/js/select2.full.min.js"></script>

            <!-- Sweetalert -->
            <script src="<?= base_url() ?>/assets/js/sweetalert2.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/sweetalert2.all.min.js"></script>
            <script src="<?= base_url() ?>/assets/js/myscript.js"></script>


            <script src="<?= base_url() ?>/assets/template/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?= base_url() ?>/assets/template/plugins/jquery-ui/jquery-ui.min.js"></script>


            <script src="<?= base_url() ?>assets/select2/select2.min.js"></script>

            <script>
                function showDiv(divId, element) {
                    document.getElementById(divId).style.display = element.value == 'ada' ? 'block' : 'none';
                }
            </script>

            <script>
                function showDivJurusan(divId, element) {
                    document.getElementById(divId).style.display = element.value == 'ainun' ? 'block' : 'none';
                }
            </script>

            <script>
                function checkMe() {
                    var alamat_ktp = document.getElementById("alamat_ktp").value;
                }
            </script>


            <script>
                $('#jenjang').on('change', function() {
                    // ambil data dari elemen option yang dipilih
                    const maksnilai = $('#jenjang option:selected').data('maksnilai');
                    // const discount = $('#package option:selected').data('discount');

                    // kalkulasi total harga
                    // const totalDiscount = (price * discount / 100)
                    // const total = price - totalDiscount;

                    // tampilkan data ke element
                    $('[name=maksnilai]').val(maksnilai);
                    // $('[name=discount]').val(totalDiscount);

                    // $('#total').text(`Rp ${total}`);
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#provinsi").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_kab'); ?>/" + $(this).val();
                        $('#kabupaten').load(url);
                        return false;
                    })

                    $("#kabupaten").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_kec'); ?>/" + $(this).val();
                        $('#kecamatan').load(url);
                        return false;
                    })

                    $("#kecamatan").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_des'); ?>/" + $(this).val();
                        $('#desa').load(url);
                        return false;
                    })

                });
            </script>

            <script>
                function sameAddres() {
                    if (document.getElementById("same").checked) {
                        document.getElementById("alamatktp2").value =
                            document.getElementById("alamatktp").value;

                        document.getElementById("kode_poss").value =
                            document.getElementById("kode_pos").value;

                        document.getElementById("provinsid").value =
                            document.getElementById("provinsi").value;

                        document.getElementById("kabupatend").value =
                            document.getElementById("kabupaten").value;

                        document.getElementById("kecamatand").value =
                            document.getElementById("kecamatan").value;


                    } else {
                        document.getElementById("alamat_ktp2").value = ""
                        document.getElementById("provinsid").value = ""
                        document.getElementById("kabupatend").value = ""
                        document.getElementById("kecamatand").value = ""
                        document.getElementById("kode_pos").value = ""
                    }
                }
            </script>


            <!-- domisili -->
            <script>
                $(document).ready(function() {
                    $("#provinsid").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_kab'); ?>/" + $(this).val();
                        $('#kabupatend').load(url);
                        return false;
                    })

                    $("#kabupatend").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_kec'); ?>/" + $(this).val();
                        $('#kecamatand').load(url);
                        return false;
                    })

                    $("#kecamatand").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_des'); ?>/" + $(this).val();
                        $('#desad').load(url);
                        return false;
                    })

                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#kota").change(function() {
                        var url = "<?php echo site_url('curiculum_vitae_final/add_ajax_kampus'); ?>/" + $(this).val();
                        $('#kampus').load(url);
                        return false;
                    })
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('.select2').select2();

                    $("#kota2").select2({
                        theme: 'bootstrap4',
                        placeholder: "Please Select"
                    });
                });
            </script>



            <script>
                var flash = $('#flash').data('flash');
                if (flash) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: flash
                    })
                }

                var flashGagal = $('#flash-gagal').data('flash');
                if (flashGagal) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: flashGagal
                    })
                }

                $(document).on('click', '#btn-hapus', function(e) {
                    e.preventDefault();
                    var link = $(this).attr('href');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data akan dihapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = link;
                        }
                    })
                })
            </script>



            <script>
                $(document).ready(function() { // Ketika halaman sudah diload dan siap
                    $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
                        var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
                        var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

                        // Kita akan menambahkan form dengan menggunakan append
                        // pada sebuah tag div yg kita beri id insert-form
                        $("#insert-form").append("<div class='card'>" +
                            "<div class='card-body'>" +
                            "<div class='row'>" +
                            "<div class='col-sm-12' style='background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px'>" +
                            "<span style = 'font-family: " + "Franklin Gothic Medium" + ", sans-serif; font-size: x-large;' class = 'text-uppercase text-white' >" +
                            "Pengalaman Kerja</strong></span >" +
                            "<button type ='button' class = 'btn btn-sm btn-danger btn_remove' style = 'border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px;' >" +
                            "<i class ='fa fa-trash'>" +
                            "</i></button> " +
                            "<button type = 'submit' class = 'btn btn-sm btn-warning' style = 'border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px;' >" +
                            "<i class ='fa fa-save'>" +
                            "</i> Save </button> " +
                            "</div>" +
                            "<hr>" +
                            "</div>" +
                            "</div>" +
                            "</div>");

                        $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
                    });
                    // menghapus form tertentu
                    $(document).on('click', '.btn_remove', function() {
                        var button_id = $(this).attr("id");
                        $('#row' + button_id + '').remove();
                    });
                    // menghapus semua form
                    $("#btn-reset-form").click(function() {
                        $("#insert-form").html("");
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    var i = 2;
                    $(".tambah-form").on('click', function() {
                        row = '<div class="rec-element">' +
                            ' <div class="card">' +
                            '<form action="<?= base_url('curiculum_vitae_final/add_pengalaman') ?>" method="post">' +
                            '<div class="card-body">' +
                            '<div class="row">' +
                            '<div class = "col-sm-12" style = "background-color: cornflowerblue; padding-top: 8px; padding-bottom: 8px" >' +
                            '<span style = "font-family: ' + 'Franklin Gothic Medium' + ', sans-serif; font-size: x-large;" class = "text-uppercase text-white" >' +
                            'Pengalaman Kerja</strong></span >' +
                            '<button type = "submit" class = "btn btn-sm btn-danger del-element" style = "border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px;" >' +
                            '<i class = "fa fa-trash" >' +
                            '</i></button >' +
                            '<button type="submit" class="btn btn-sm btn-warning" style = "border-radius: 1px; box-shadow: 20px; padding-left: 15px; padding-right: 15px; float: right; margin-left: 10px;>' +
                            '<i class="fa fa-save">' + '</i> Simpan data anda' +
                            '</button>' +

                            '</div>' +
                            '<hr >' + '</div>' +
                            '<div class="row">' +
                            '<div class="col-lg-6">' +
                            '<div class="mb-3">' +
                            '<label class="form-label">Nama Perusahaan / Instansi: <span class="text-danger"></span></label>' +
                            '<input type="hidden" class="form-control" name="id_akun_calon_pegawai" value="<?=
                                                                                                            $this->session->userdata('id_akun_calon_pegawai');
                                                                                                            ?>" placeholder="Nama perusahaan/instansi">' +
                            '<input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama perusahaan/instansi" required>' +
                            '</div>' +

                            '<div class="mb-3">' +
                            '<label class="form-label">Jabatan: <span class="text-danger"></span></label>' +
                            '<input type="text" name="jabatan" class="form-control" placeholder="Jabatan saudara/i" required>' +
                            '</div>' +
                            '</div>' +

                            '<div class="col-lg-6">' +
                            '<div class="mb-3">' +
                            '<label class="form-label">Mulai bekerja: <span class="text-danger">*</span></label>' +
                            '<input type="date" class="form-control" name="tgl_bekerja" required>' +
                            '</div>' +
                            '<div class="mb-3">' +
                            '<label class="form-label">Sampai tanggal: <span class="text-danger">*</span></label>' +
                            '<input type="date" class="form-control" name="tgl_selesai" required>' +
                            '</div>' +
                            '</div>' +

                            '<div class="mb-3">' +
                            '<label class="form-label">Status pegawai: <span class="text-danger">*</span></label>' +
                            '<select name="status_pegawai" class="form-control select2" required>' +
                            '<option value="">Pilihan</option>' +
                            '<option value="Pegawai Kontrak">Pegawai Kontrak</option>' +
                            '<option value="Pegawai Tetap">Pegawai Tetap</option>' +
                            '<option value="Pegawai Tetap Non PNS">Pegawai Tetap Non PNS</option>' +
                            '</select>' +
                            '</div>' +

                            '<div class="mb-3">' +
                            '<label class="form-label">Peran dan tanggung jawab: <span class="text-danger">*</span></label>' +
                            '<textarea name="peran_tj" class="form-control" id="" cols="10" rows="4" placeholder="Peran dan tanggung jawab"></textarea>' +
                            '</div>' +

                            '</div>' +
                            '</div>' +
                            '</form>' +
                            '</div>' +
                            '</div>';
                        $(row).insertBefore("#nextkolom");
                        $('#jumlahkolom').val(i + 1);
                        i++;
                    });
                    $(document).on('click', '.del-element', function(e) {
                        e.preventDefault()
                        i--;
                        //$(this).parents('.rec-element').fadeOut(400);
                        $(this).parents('.rec-element').remove();
                        $('#jumlahkolom').val(i - 1);
                    });
                });
            </script>


            </body>

            </html>