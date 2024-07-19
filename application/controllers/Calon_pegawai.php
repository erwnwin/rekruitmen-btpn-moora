<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Calon_pegawai extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Calon Pegawai : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Calon Pegawai";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pegawai/calon_pegawai');
        $this->load->view('template/footer', $data);
    }
}

/* End of file Profil.php */
