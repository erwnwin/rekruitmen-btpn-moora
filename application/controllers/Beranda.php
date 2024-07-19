<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Login : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        $this->load->view('template_pegawai/v_header', $data);
        $this->load->view('beranda/calon_pegawai', $data);
        $this->load->view('template_pegawai/v_footer', $data);
    }
}

/* End of file Beranda.php */
