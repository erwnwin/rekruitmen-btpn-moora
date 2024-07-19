<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_alternatif');
        $this->load->model('m_kriteria');
        $this->load->model('m_penilaian');
        $this->load->model('m_app');
        $this->load->model('m_pelamar');
    }


    public function index()
    {
        $data['title'] = "Alternatif : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Data Alternatif ~ Penilaian Calon Pegawai";
        // $data['pengguna'] = $this->m_alternatif->tampil_pengguna();
        $data['al'] = $this->m_penilaian->tampil_alternatif();
        $data['kriteria'] = $this->m_kriteria->tampil();
        $data['kriteria1'] = $this->m_kriteria->jumlah();

        $data['job'] = $this->m_alternatif->view_job();
        // $data['job'] = $this->m_alternatif->view_job();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/alternatif_penilaian_new', $data);
        $this->load->view('template/footer', $data);
    }


    public function input_penilaian()
    {
        $data['title'] = "Penilaian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Penilaian Calon Pegawai";
        $data['al'] = $this->m_penilaian->tampil_alternatif();
        $data['kriteria'] = $this->m_kriteria->tampil();
        $data['kriteria1'] = $this->m_kriteria->jumlah();

        $data['job'] = $this->m_alternatif->view_job();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/penilaian_cp', $data);
        $this->load->view('template/footer', $data);
    }

    public function tampil_data()
    {
        // $nip = $this->input->post('nip');
        $result = $this->m_kriteria->tampil();
        $data['id_kriteria'] = $result->id_kriteria;
        $data['kriteria'] = $result->kriteria;
    }

    public function save()
    {
        $id_pengguna = $this->input->post('id_pengguna');
        $id_kriteria = $this->input->post('id_kriteria');
        $totalnilai = $this->input->post('totalnilai');

        $i = 0;
        $data[] = [
            'id_pengguna' => $id_pengguna[$i],
            'id_kriteria' => $id_kriteria[$i],
            'totalnilai' => $totalnilai[$i],
        ];

        //insertbatch
        $result = $this->db->insert_batch('penilaian', $data);
        if ($result) { // Jika sukses
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses</h4>
            Data Penilaian Berhasil disimpan.
            </div>');
            redirect(base_url('alternatif_penilaian'));
        } else { // Jika gagal
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
            Data Penilaian Gagal Tersimpan.
            </div>');
            redirect(base_url('alternatif_penilaian'));
        }
    }

    public function add_save()
    {

        $kriteria = $this->input->post('total');

        for ($i = 1; $i <= $kriteria; $i++) {
            $value = 'gedung' . $i;
            // $value1 = 'id_kriteria' . $i;
            // $value2 = 'id_sub_kriteria' . $i;
            // $value1 = 'total_nilai' . $i;
            $data = [
                'gedung' => $this->input->post($value),
                'kelas' => $this->input->post('kelas' . $i),
                // 'id_kriteria' => $this->input->post('id_kriteria'),
                // 'total_nilai' => $this->input->post($value),
            ];
            $this->db->insert('coba', $data);


            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Gagal</h4>
            Data Penilaian Gagal disimpan.
            </div>');
            redirect(base_url('alternatif_penilaian'));
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
        Data Penilaian Gagal Tersimpan.
        </div>');
        redirect(base_url('alternatif_penilaian'));

        // for ($i = 1; $i <= $kriteria; $i++) {
        //     // $value = 'total_nilai' . $i;

        //     $data = array(
        //         // 'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
        //         // 'id_job' => $this->input->post('id_job'),
        //         'id_kriteria' => $this->input->post('id_kriteria' . $i),
        //         'total_nilai' => $this->input->post('total_nilai' . $i),
        //     );

        //     $result = $this->m_penilaian->save_batch($data);
        //     if ($result) { // Jika sukses
        //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        //     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        //     <h4><i class="icon fa fa-check"></i> Sukses</h4>
        //     Data Penilaian Berhasil disimpan.
        //     </div>');
        //         redirect(base_url('alternatif_penilaian'));
        //     } else { // Jika gagal
        //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        //     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        //     <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
        //     Data Penilaian Gagal Tersimpan.
        //     </div>');
        //         redirect(base_url('alternatif_penilaian'));
        //     }
        // }
    }

    // public function add()
    // {
    //     // Ambil data yang dikirim dari form
    //     $id_pengguna = $_POST['id_pengguna']; // Ambil data id_pengguna dan masukkan ke variabel id_pengguna
    //     $id_kriteria = $_POST['id_kriteria']; // Ambil data id_kriteria dan masukkan ke variabel id_kriteria
    //     $totalnilai = $_POST['totalnilai']; // Ambil data totalnilai dan masukkan ke variabel totalnilai
    //     // $alamat = $_POST['alamat']; // Ambil data alamat dan masukkan ke variabel alamat
    //     $data = array();

    //     $index = 0; // Set index array awal dengan 0
    //     foreach ($id_pengguna as $dataidpengguna) { // Kita buat perulangan berdasarkan nis sampai data terakhir
    //         array_push($data, array(
    //             'id_pengguna' => $dataidpengguna,
    //             'id_kriteria' => $id_kriteria[$index],  // Ambil dan set data id_kriteria sesuai index array dari $index
    //             'totalnilai' => $totalnilai[$index],  // Ambil dan set data telepon sesuai index array dari $index
    //             // 'alamat' => $alamat[$index],  // Ambil dan set data alamat sesuai index array dari $index
    //         ));
    //         $index++;
    //     }
    //     $sql = $this->m_penilaian->save_batch($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)

    //     // Cek apakah query insert nya sukses atau gagal
    //     if ($sql) { // Jika sukses
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
    //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    //         <h4><i class="icon fa fa-check"></i> Sukses</h4>
    //         Data Penilaian Berhasil disimpan.
    //         </div>');
    //         redirect(base_url('alternatif_penilaian'));
    //     } else { // Jika gagal
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
    //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    //         <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
    //         Data Penilaian Gagal Tersimpan.
    //         </div>');
    //         redirect(base_url('alternatif_penilaian'));
    //     }
    // }

    // function add_ajax_subkriteria($id_kriteria)
    // {
    //     $query = $this->db->get_where('sub_kriteria', array('id_kriteria' => $id_kriteria));
    //     $data = "<input value='' readonly></input>";
    //     foreach ($query->result() as $value) {
    //         $data .= "<input value='" . $value->subbobot . "'></input>";
    //     }
    //     echo $data;
    // }

    // function add_ajax_id($id_job)
    // {
    //     $query = $this->db->query("SELECT * FROM job_vacancies
    //     WHERE id_job='$id_job'")->result();
    //     // $query = $this->db->get_where('alternatif_new', array('id_job' => $id_job));

    //     $data['pengguna'] = $this->m_alternatif->tampil_pengguna();
    //     $data['al'] = $this->m_penilaian->tampil_alternatif();
    //     $data['kriteria'] = $this->m_kriteria->tampil();

    //     $data['job'] = $this->m_alternatif->view_job();

    //     $data = "";
    //     foreach ($query as $value) {

    //         $data .= "
    //         <option value='" . $value->id_job . "' selected>" . $value->id_job . "</option>
    //            ";
    //     }
    //     echo $data;
    // }


    function add_ajax_penilaian($id_job)
    {
        $query = $this->db->query("SELECT * FROM alternatif_new 
        JOIN akun_calon_pegawai ON alternatif_new.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai 
        JOIN job_vacancies ON alternatif_new.id_job=job_vacancies.id_job 
        WHERE alternatif_new.id_job='$id_job'")->result();
        // $query = $this->db->get_where('alternatif_new', array('id_job' => $id_job));

        $data['pengguna'] = $this->m_alternatif->tampil_pengguna();
        $data['al'] = $this->m_penilaian->tampil_alternatif();
        $data['kriteria'] = $this->m_kriteria->tampil();

        $data['job'] = $this->m_alternatif->view_job();

        $data = "<option value='' >Pilihan</option>";
        foreach ($query as $value) {

            $data .= "
            
                        <option value='" . $value->id_akun_calon_pegawai . "'>" . ucfirst($value->nama_lengkap) . "</option>
                   
               ";
        }
        echo $data;
    }


    function add_ajax_kriteria($id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM kriteria 
        JOIN sub_kriteria ON kriteria.id_kriteria=sub_kriteria.id_kriteria 
        WHERE kriteria.id_kriteria='$id_kriteria'")->result();

        $data = "<option value=''>Pilihan Sub Kriteria</option>";
        foreach ($query as $value) {

            $data .= "
            
                        <option value='" . $value->subbobot . "'>" . $value->sub_kriteria . "</option>
               ";
        }
        echo $data;
    }


    function add_ajax_sub_kriteria($id_sub_kriteria)
    {
        $query = $this->db->query("SELECT * FROM sub_kriteria 
        -- JOIN kriteria ON sub_kriteria.id_sub_kriteria=kriteria.id_sub_kriteria 
        WHERE id_sub_kriteria='$id_sub_kriteria'")->result();

        $data = "";
        foreach ($query as $value) {

            $data .= "
                        <option value='" . $value->subbobot . "' >" . "Range : " . $value->range . " ~ dengan Nilai Bobot : " . $value->subbobot . "</option>
                                
               ";
        }
        echo $data;
    }

    function input_jumlah_terima()
    {

        $id_job = $this->input->post('id_job');

        $sql = $this->db->query("SELECT id_job FROM jumlah_diterima where id_job='$id_job'");
        $cek = $sql->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('gagal', 'Email telah didaftarkan sebelumnya. Silahkan cek email untuk verifikasi akun');
            redirect(base_url('alternatif_penilaian/update/' . $id_job));
        } else {

            $id_job = $this->input->post('id_job');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'id_job' => $id_job,
                'jumlah' => $jumlah,

            );


            $this->m_app->input_data($data, 'jumlah_diterima');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Tersimpan</h4>
            Data Berhasil disimpan!
            </div>');
            redirect(base_url('alternatif_penilaian'));
        }
    }

    public function update($id)
    {
        $where = array('id_job' => $id);

        $data['title'] = "Update Jumlah Terima : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Update Jumlah Terima Calon Pegawai";

        $data['job'] = $this->m_alternatif->view_job();

        $data['jmlh'] = $this->db->query("SELECT * FROM jumlah_diterima 
        JOIN job_vacancies ON jumlah_diterima.id_job=job_vacancies.id_job
         WHERE jumlah_diterima.id_job='$id'")->result();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/update_jumlah');
        $this->load->view('template/footer', $data);
    }

    function update_jml()
    {
        $id_jumlah = $this->input->post('id_jumlah');
        $id_job = $this->input->post('id_job');
        $jumlah = $this->input->post('jumlah');


        $data = array(
            'id_jumlah' => $id_jumlah,
            'id_job' => $id_job,
            'jumlah' => $jumlah,

        );

        $where = array(
            'id_jumlah' => $id_jumlah
        );

        $this->m_pelamar->update_data($where, $data, 'jumlah_diterima');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Diupdate</h4>
            Data Berhasil diupdate!
            </div>');
        redirect(base_url('alternatif_penilaian'));
    }
}

/* End of file Alternatif.php */
