<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lamar extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Lowongan : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Lowongan Tersedia";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');

        $data['job'] = $this->db->query("SELECT DISTINCT job, deskripsi_job, persyaratan, id_jurusan FROM job_vacancies ORDER BY id_job")->result();
        $data['job1'] = $this->db->query("SELECT * FROM job_vacancies")->result();

        $data['lamar'] = $this->db->query("SELECT * FROM pendidikan
                            JOIN jurusan ON pendidikan.id_jurusan=jurusan.id_jurusan
                            WHERE pendidikan.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();
        // $data['jurusan'] = $this->m_pelamar->lamar($data['user']['id_akun_calon_pegawai']);
        // $data['job'] = $this->m_app->tampil_job();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/lamar', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }
}

/* End of file Lamar.php */
