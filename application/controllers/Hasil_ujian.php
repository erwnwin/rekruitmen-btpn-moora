<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta');
        $this->load->model('m_data');
    }


    public function index()
    {
        $data['title'] = "Hasil Ujian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Hasil Ujian";

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
        $this->load->view('ujian/hasil_ujian');
        $this->load->view('template/footer', $data);
    }
}

/* End of file Hasil_ujian.php */
