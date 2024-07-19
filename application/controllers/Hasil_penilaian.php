<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_penilaian extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }


    public function index()
    {
        $data['title'] = "Hasil Penilaian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Hasil Penilaian";

        $data['cv'] = $this->db->query("SELECT * FROM hasil_penilaian 
        JOIN akun_calon_pegawai ON hasil_penilaian.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
        JOIN alamat ON akun_calon_pegawai.id_akun_calon_pegawai=alamat.id_akun_calon_pegawai
        JOIN wilayah_kecamatan ON alamat.kecamatan=wilayah_kecamatan.id
        JOIN wilayah_kabupaten ON alamat.kota_kab=wilayah_kabupaten.id
        -- JOIN tb_nilai ON akun_calon_pegawai.id_akun_calon_pegawai=tb_nilai.id_akun_calon_pegawai
        JOIN pendidikan ON akun_calon_pegawai.id_akun_calon_pegawai=pendidikan.id_akun_calon_pegawai
        JOIN data_diri ON akun_calon_pegawai.id_akun_calon_pegawai=data_diri.id_akun_calon_pegawai
        -- JOIN pengalaman_kerja ON akun_calon_pegawai.id_akun_calon_pegawai=pengalaman_kerja.id_akun_calon_pegawai
        -- JOIN tb_nilai ON akun_calon_pegawai.id_akun_calon_pegawai=tb_nilai.id_akun_calon_pegawai
        ")->result();

        $data['pesan'] = $this->db->query("SELECT * FROM hasil_penilaian 
        JOIN akun_calon_pegawai ON hasil_penilaian.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
        JOIN data_diri ON akun_calon_pegawai.id_akun_calon_pegawai=data_diri.id_akun_calon_pegawai
        ")->result();

        if (isset($_GET['id_lowongan'])) {
            $id = $this->input->get('id_lowongan');
            $data['hasil'] = $this->db->query('SELECT * FROM hasil_penilaian
            join akun_calon_pegawai ON hasil_penilaian.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            join job_vacancies where hasil_penilaian.id_job=job_vacancies.id_job and job_vacancies.id_job="' . $id . '" order by hasil_penilaian.rank ASC')->result();
            $data['job'] = $this->m_data->get_data('job_vacancies')->result();
        } else {
            $id = $this->input->get('id_lowongan');
            $data['hasil'] = $this->db->query('SELECT * FROM hasil_penilaian
            join akun_calon_pegawai ON hasil_penilaian.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            join job_vacancies where hasil_penilaian.id_job=job_vacancies.id_job and job_vacancies.id_job="' . $id . '" order by hasil_penilaian.rank ASC')->result();
            $data['job'] = $this->m_data->get_data('job_vacancies')->result();
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('hasiL_penilaian/index');
        $this->load->view('template/footer', $data);
    }
}

/* End of file Hasil_penilaian.php */
