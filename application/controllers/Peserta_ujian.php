<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_ujian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta');
        $this->load->model('m_data');
    }


    public function index()
    {
        $data['title'] = "Peserta Ujian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Peserta Ujian";

        $data['calon'] = $this->db->query('SELECT * from tb_peserta 
        -- join job_vacancies ON alternatif_new.id_job=job_vacancies.id_job
        join akun_calon_pegawai where tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai')->result();

        if (isset($_GET['idkls']) and isset($_GET['idsiswa'])) {
            $idkls = $this->input->get('idkls');
            $idsiswa = $this->input->get('idsiswa');

            $data['job'] = $this->m_data->get_data('job_vacancies')->result();

            $data['peserta'] = $this->m_peserta->get_peserta($idkls, $idsiswa)->result();

            // $data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
            // $data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
        } else if (isset($_GET['idkls'])) {
            $idkls = $this->input->get('idkls');
            $data['peserta'] = $this->m_peserta->get_peserta2($idkls)->result();
            // $data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
            // $data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
        } else if (isset($_GET['idsiswa'])) {
            $idsiswa = $this->input->get('idsiswa');
            $data['peserta'] = $this->m_peserta->get_peserta3($idsiswa)->result();
            // $data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
            // $data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
        } else {
            $data['peserta'] = $this->m_peserta->get_peserta4()->result();
            $data['job'] = $this->m_data->get_data('job_vacancies')->result();
            // $data['kelas'] = $this->m_data->get_data('tb_kelas')->result();
            // $data['siswa'] = $this->m_data->get_data('tb_siswa')->result();
        }
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/peserta_ujian');
        $this->load->view('template/footer', $data);
    }

    public function tambah_peserta()
    {
        $data['title'] = "Peserta Ujian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Peserta Ujian";


        if (isset($_GET['job_vacancy'])) {
            $id = $this->input->get('job_vacancy');
            $data['calon'] = $this->db->query('SELECT * from alternatif_new 
            join job_vacancies ON alternatif_new.id_job=job_vacancies.id_job
            join akun_calon_pegawai where alternatif_new.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            and alternatif_new.id_job="' . $id . '"')->result();

            $data['job'] = $this->m_data->get_data('job_vacancies')->result();
            // $data[''] = $this->m_data->get_data('tb_matapelajaran')->result();
            $data['jenis_ujian'] = $this->m_data->get_data('jenis_ujian')->result();
        } else {
            $data['calon'] = $this->db->query('SELECT * from alternatif_new 
            join job_vacancies ON alternatif_new.id_job=job_vacancies.id_job
            join akun_calon_pegawai where alternatif_new.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai')->result();
            $data['job'] = $this->m_data->get_data('job_vacancies')->result();
            // $data['mapel'] = $this->m_data->get_data('tb_matapelajaran')->result();
            $data['jenis_ujian'] = $this->m_data->get_data('jenis_ujian')->result();
        }
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/tambah_peserta_ujian');
        $this->load->view('template/footer', $data);
    }


    public function insert_()
    {
        $id_jenis_ujian             = $this->input->post('id_jenis_ujian');
        $tanggal        = $this->input->post('tanggal');
        $jam            = $this->input->post('jam');
        // $jenis            = $this->input->post('jenis_ujian');
        $durasi_ujian        = $this->input->post('durasi_ujian');

        if ($id_jenis_ujian == '' || $tanggal == '' || $jam == '' || $durasi_ujian == '') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Input Data Peserta Gagal !</h4> Cek kembali data yang diinputkan.</div>');
            redirect(base_url('peserta_ujian'));
        } else {
            $result = $this->m_data->insert_multiple();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Peserta Ujian berhasil dibuat !</h4></div>');
            redirect(base_url('peserta_ujian'));
        }
    }


    public function delete($id_peserta)
    {
        $this->m_peserta->hapus_peserta($id_peserta);
        $this->session->set_flashdata('sukses', 'Data Peserta Ujian berhasil dihapus.');
        redirect(base_url('peserta_ujian'));
    }
}

/* End of file Peserta_ujian.php */
