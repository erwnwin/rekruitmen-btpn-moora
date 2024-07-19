<footer class="main-footer">
  Copyright &copy; <?php echo date('Y'); ?>
  - Asri Aenun Hijjeriya
  <div class="float-right d-none d-sm-inline-block">
    Versi 1.2
  </div>
</footer>


<!--JavaScript-->
<!-- jQuery -->
<script src="<?= base_url() ?>/assets/template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/assets/template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- InputMask -->
<script src="<?= base_url() ?>/assets/template/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>/assets/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>/assets/template/plugins/sparklines/sparkline.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>/assets/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>/assets/template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>/assets/template/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>/assets/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<!-- <script src="<?= base_url() ?>/assets/template/plugins/sweetalert2/sweetalert2.min.js"></script> -->
<!-- Toastr -->
<script src="<?= base_url() ?>/assets/template/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/template/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/template/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>/assets/template/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>/assets/js/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>/assets/js/myscript.js"></script>
<!-- jsGrid -->
<script src="<?= base_url() ?>/assets/template/plugins/jsgrid/jsgrid.min.js"></script>

<!-- <script src="<?= base_url() ?>assets/dist/ujian/add.js"></script> -->

<script>
  $(function() {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function() {
    // Summernote
    $('#summernote1').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>


<script>
  <?php foreach ($alternatif as $alt) { ?>
    <?php foreach ($calon_pegawai as $t) { ?>
      <?php if ($alt->id_akun_calon_pegawai == $t->id_akun_calon_pegawai) { ?>
        $(document).ready(function() {
          $("#check-all<?= $alt->id_akun_calon_pegawai ?>").click(function() {
            if ($(this).is(":checked"))
              $(".check-item").prop("checked", true);
            else
              $(".check-item").prop("checked", false);
          });
          $("#btn-delete").click(function() {
            var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?");
            if (confirm)
              $("#form-delete").submit();
          });
        });
      <?php } ?>
    <?php } ?>
  <?php } ?>
</script>



<script>
  $(document).ready(function() {
    $('#myselect').on('change', function() {
      var demovalue = $(this).val();
      $("div.myDiv").hide();
      $("#show" + demovalue).show();
    });
  });
</script>


<!-- <script>
  $('#package').on('change', function() {
    // ambil data dari elemen option yang dipilih
    const price = $('#package option:selected').data('price');
    // const discount = $('#package option:selected').data('discount');

    // kalkulasi total harga
    // const totalDiscount = (price * discount / 100)
    // const total = price - totalDiscount;

    // tampilkan data ke element
    $('[name=price]').val(price);
    // $('[name=discount]').val(totalDiscount);

    // $('#total').text(`Rp ${total}`);
  });
</script> -->

<script>
  $('#alternatif_penilaian2').on('change', function() {
    const subbobot = $('#alternatif_penilaian2 option:selected').data('subbobot');
    $('[name=subbobot]').val(subbobot);
  });
</script>


<script>
  $('#range').on('change', function() {
    // ambil data dari elemen option yang dipilih
    const subbobot = $('#range option:selected').data('subbobot');
    // const discount = $('#package option:selected').data('discount');

    // kalkulasi total harga
    // const totalDiscount = (price * discount / 100)
    // const total = price - totalDiscount;

    // tampilkan data ke element
    $('[name=subbobot]').val(subbobot);
    // $('[name=discount]').val(totalDiscount);

    // $('#total').text(`Rp ${total}`);
  });
</script>

<!-- <script>
  $(document).ready(function() {
    $("#id_kriteria").change(function() {
      var url = "<?php echo site_url('alternatif_penilaian/add_ajax_subkriteria'); ?>/" + $(this).val();
      $('#totalnilai').load(url);
      return false;
    })

    $("#kabupaten").change(function() {
      var url = "<?php echo site_url('wilayah/add_ajax_kec'); ?>/" + $(this).val();
      $('#kecamatan').load(url);
      return false;
    })

    $("#kecamatan").change(function() {
      var url = "<?php echo site_url('wilayah/add_ajax_des'); ?>/" + $(this).val();
      $('#desa').load(url);
      return false;
    })
  });
</script> -->

<script>
  <?php
  $sub_kriteria = $this->db->query("SELECT * FROM sub_kriteria 
                                                    JOIN kriteria ON sub_kriteria.id_kriteria=kriteria.id_kriteria 
                                                    WHERE kriteria.id_kriteria=sub_kriteria.id_kriteria "); ?>

  <?php
  $no = 1;
  foreach ($sub_kriteria->result() as $s) { ?>

    $('#id_kriteria').on('change', function() {
      // ambil data dari elemen option yang dipilih
      const totalnilai = $('#id_kriteria option:selected').data('totalnilai<?= $s->id_kriteria ?>');

      $('[name=totalnilai]').val(totalnilai);
      // tampilkan data ke element

    });
  <?php } ?>
</script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()


    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('hh:mm:ss', {
      'placeholder': 'hh:mm:ss'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'YYYY/MM/DD'
    });

    $('#reservationtime').datetimepicker({
      format: 'hh:mm:s'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    $('#reservationdatetime1').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm:ss'
      }
    })

    $('#reservationtime1').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm:ss'
      }
    })



    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
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
  $('#selectjurusan').change(function() {
    let selected = $('#selectjurusan').find(':selected').val();
    $.ajax({
      type: 'post',
      url: "<?= base_url('siswa/cari_kelas') ?>",
      data: {
        'kode_jurusan': selected
      },
      success: function(data) {
        var datakelas = JSON.parse(data);
        $('#selectkelas').html(datakelas).show();
      }
    })

  });
</script>
<script>
  // modal detail siswa
  $('#detailsiswa').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nisn = button.data('nisn') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    $.ajax({
      type: 'post',
      url: '<?= base_url() ?>Siswa/tampildata',
      data: {
        'nisn': nisn
      },
      success: function(data) {
        var dataSiswa = JSON.parse(data);
        modal.find('#nisn').text(dataSiswa.nisn)
        modal.find('#nama_lengkap').text(dataSiswa.nama_lengkap)
        modal.find('#jenis_kelamin').text(dataSiswa.jenis_kelamin)
        modal.find('#agama').text(dataSiswa.agama)
        modal.find('#ttl').text(dataSiswa.ttl)
        modal.find('#tempat_lahir').text(dataSiswa.tempat_lahir)
        modal.find('#tanggal_lahir').text(dataSiswa.tanggal_lahir)
        modal.find('#tgl_lahir').text(dataSiswa.tgl_lahir)
        modal.find('#alamat').text(dataSiswa.alamat)
        modal.find('#no_hp').text(dataSiswa.no_hp)
        modal.find('#tahun_ajaran').text(dataSiswa.tahun_ajaran)
        modal.find('#kode_jurusan').text(dataSiswa.kode_jurusan)
        modal.find('#kelas_1').text(dataSiswa.kelas_1)
        modal.find('#kelas_2').text(dataSiswa.kelas_2)
        modal.find('#kelas_3').text(dataSiswa.kelas_3)

        // orangtua
        modal.find('#nama_bapak').text(dataSiswa.nama_bapak)
        modal.find('#nama_ibu').text(dataSiswa.nama_ibu)
        modal.find('#pekerjaan_bapak').text(dataSiswa.pekerjaan_bapak)
        modal.find('#pekerjaan_ibu').text(dataSiswa.pekerjaan_ibu)
        modal.find('#no_hp_bapak').text(dataSiswa.no_hp_bapak)
        modal.find('#no_hp_ibu').text(dataSiswa.no_hp_ibu)
        modal.find('#alamat_ortu').text(dataSiswa.alamat_ortu)
        console.log(dataSiswa)
      }
    })
  })
</script>
<script>
  // modal detail siswa
  $('#detailguru').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nip = button.data('nip') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    $.ajax({
      type: 'post',
      url: '<?= base_url() ?>Guru/tampildata',
      data: {
        'nip': nip
      },
      success: function(data) {
        var dataSiswa = JSON.parse(data);
        modal.find('#nip').text(dataSiswa.nip)
        modal.find('#nik').text(dataSiswa.nik)
        modal.find('#nama_lengkap_guru').text(dataSiswa.nama_lengkap_guru)
        modal.find('#jenis_kelamin').text(dataSiswa.jenis_kelamin)
        modal.find('#agama').text(dataSiswa.agama)
        modal.find('#ttl').text(dataSiswa.ttl)
        modal.find('#tempat_lahir').text(dataSiswa.tempat_lahir)
        modal.find('#tanggal_lahir').text(dataSiswa.tanggal_lahir)
        modal.find('#tgl_lahir').text(dataSiswa.tgl_lahir)
        modal.find('#alamat').text(dataSiswa.alamat)
        modal.find('#sekolah_asal').text(dataSiswa.sekolah_asal)

        modal.find('#no_hp_guru').text(dataSiswa.no_hp_guru)
        modal.find('#email').text(dataSiswa.email)
        modal.find('#no_rek').text(dataSiswa.no_rek)
        modal.find('#tk_ijazah').text(dataSiswa.tk_ijazah)
        modal.find('#tgl_masuk').text(dataSiswa.tgl_masuk)
        // modal.find('#tahun_ajaran').text(dataSiswa.tahun_ajaran)
        // modal.find('#kode_jurusan').text(dataSiswa.kode_jurusan)
        // modal.find('#kelas_1').text(dataSiswa.kelas_1)
        // modal.find('#kelas_2').text(dataSiswa.kelas_2)
        // modal.find('#kelas_3').text(dataSiswa.kelas_3)

        // // orangtua
        // modal.find('#nama_bapak').text(dataSiswa.nama_bapak)
        // modal.find('#nama_ibu').text(dataSiswa.nama_ibu)
        // modal.find('#pekerjaan_bapak').text(dataSiswa.pekerjaan_bapak)
        // modal.find('#pekerjaan_ibu').text(dataSiswa.pekerjaan_ibu)
        // modal.find('#no_hp_bapak').text(dataSiswa.no_hp_bapak)
        // modal.find('#no_hp_ibu').text(dataSiswa.no_hp_ibu)
        // modal.find('#alamat_ortu').text(dataSiswa.alamat_ortu)
        console.log(dataSiswa)
      }
    })
  })
</script>




<script>
  // modal pembayaran SPP
  $('#bayarSPP').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var nisn = button.data('nisn')
    var modal = $(this)
    $.ajax({
      type: 'post',
      url: '<?= base_url() ?>Transaksi_pembayaran_spp/searchSiswa',
      data: {
        'nisn': nisn
      },
      success: function(data) {
        // alert(data);
        var dataSiswa = JSON.parse(data);
        console.log(dataSiswa);
        modal.find('#dataNISN').text(dataSiswa.nisn)
        modal.find('#NIS').val(dataSiswa.nisn)
        modal.find('#dataNama').text(dataSiswa.nama_lengkap)
        modal.find('#dataJurusan').text(dataSiswa.kode_jurusan)
        modal.find('#dataJenisSPP').text(dataSiswa.kategori)
        modal.find('#dataNominalSPP').text('Rp. ' + dataSiswa.nominal_jenis)
        modal.find('#jenisSpp').val(dataSiswa.kode_jenis)
        modal.find('#nominalspp').val(dataSiswa.nominal_jenis)
        modal.find('#selectKelas').html(dataSiswa.selectKelas)
        modal.find('#dataDaftarTagihan').html(dataSiswa.list_tagihan)
      }
    })
  })
</script>
<script>
  $(document).ready(function() {
    $("#surat").on('change', function() {
      // alert($(this).val());
      $(".data").hide();
      $("#" + $(this).val()).fadeIn(300);
    }).change();
  });
</script>




<script>
  $(document).ready(function() {
    var nama_kelas = document.getElementById("nama_kelas").value;
    var nextform = 0;
    // tambah isian form
    $("#btn-tambah-form").click(function() {
      nama_kelas;
      nextform++;
      $("#insert-form").append(
        "<div id='row" + nextform + "'>" +

        "<input type='text' name='nama_kelas[] value=" + nama_kelas + "placeholder='nama kelas' required> " +
        "<input type='text' name='lantai[]' placeholder='lantai' > " +
        '<button type="button" id="' + nextform + '" class="btn_remove">Hapus</button>'
      );
      $("#jumlah-form").val(nextform);
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
    $("#job").change(function() {
      var url = "<?php echo site_url('alternatif/add_ajax_al'); ?>/" + $(this).val();
      $('#alternatif').load(url);
      return false;
    })

  });
</script>


<script>
  $(document).ready(function() {

    $("#job_alt").change(function() {
      var url = "<?php echo site_url('alternatif_penilaian/add_ajax_penilaian'); ?>/" + $(this).val();
      $('#alternatif_penilaian').load(url);
      return false;
    })

  });
</script>


<!-- <script>
  $(document).ready(function() {

    $("#job_alt").change(function() {
      var url = "<?php echo site_url('alternatif_penilaian/add_ajax_id'); ?>/" + $(this).val();
      $('#job').load(url);
      return false;
    })

  });
</script> -->


<script>
  $(document).ready(function() {
    var total = document.getElementById("total").value;
    for (let i = 1; i <= total; i++) {
      $("#kriteriaku" + i).change(function() {
        var url = "<?php echo site_url('alternatif_penilaian/add_ajax_kriteria'); ?>/" + $(this).val();
        $('#alternatif_penilaian2' + i).load(url);
        return false;
      })

    }


  });
</script>


<script>
  $(document).ready(function() {
    var total = document.getElementById("total").value;
    for (let i = 1; i <= total; i++) {
      $("#alternatif_penilaian2" + i).change(function() {
        var url = "<?php echo site_url('alternatif_penilaian/add_ajax_sub_kriteria'); ?>/" + $(this).val();
        $('#range_bobot' + i).load(url);
        return false;
      })
    }
  });
</script>

<script>
  $(document).ready(function() { // Ketika halaman sudah diload dan siap

    $("#btn-tambah-form-nilai").click(function() { // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form


      $("#insert-form").append("<hr> <div class = 'form-group row'>" +
        "<label class ='col-sm-4 col-form-label' > Pilih Kriteria Penilaian" +
        "</label>" +
        "<div class ='col-sm-8'>" +

        "<select class ='form-control select2' id ='kriteriaku' name ='id_kriteria'style = 'width: 100%;' required >" +
        "<option value =''> Pilihan Kriteria </option>" +
        <?php

        foreach ($kriteria as $data) :
          "<option value =''> Pilihan Kriteria </option>";
        endforeach;
        ?> "</select>");

      // <?php
          // foreach ($kriteria as $data) {
          //   echo '<option value=' . $data->id_kriteria . '>' . $data->kriteria . '</option>';
          // }
          // 
          ?> +
      // "</select>" +
      // "<div class ='mt-2'>< /div> <select class = 'form-control select2' id = 'alternatif_penilaian2' name = 'total_nilai' style = 'width: 100%;' required>" +
      // "<option value = '' > Pilihan Sub Kriteria < /option>" +
      // "</select>" +
      // "<div class ='mt-2'></div>" +
      // "<select class = 'form-control'id = 'range_bobot' name = 'total_nilai' style = 'width: 100%;' required disabled>" +
      // "<option value = '' > Range < /option>" +
      // "</select>" +
      // "</div></div > ");


      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });

    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function() {
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
</script>

<script type="text/javascript">
  // $('#cek-semua').on('click', function () {
  //   $(this).closest('table').find(':checkbox').prop('checked', this.checked);
  // });

  $('#cek-semua').click(function() {
    $('input:checkbox').prop('checked', this.checked);
  })
  //Flat red color scheme for iCheck
  // $('input[type="checkbox"].flat-red').iCheck({
  //   checkboxClass: 'icheckbox_flat-green'
  // });



  $(function() {
    $('#data').dataTable();
  });

  $('#datepicker').datepicker({
    autoclose: true,
    todayHighlight: true,
    orientation: "bottom auto",
    format: 'yyyy-mm-dd'
  });
  $('#date').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
  $('#timepicker').timepicker({
    showInputs: false,
    showMeridian: false
  });
  $('#time').timepicker({
    showInputs: false,
    showMeridian: false
  });

  $('.select2').select2();

  $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>





</body>

</html>