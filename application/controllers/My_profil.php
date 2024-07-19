<?php

defined('BASEPATH') or exit('No direct script access allowed');

class My_profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Profil Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Profil Saya";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/profil', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }
}

/* End of file Dashboard.php */
