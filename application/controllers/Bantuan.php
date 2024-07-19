<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Bantuan : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Bantuan";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('bantuan');
        $this->load->view('template/footer', $data);
    }
}

/* End of file Bantuan.php */
