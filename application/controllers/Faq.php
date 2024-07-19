<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function index()
    {
        $data['title'] = "FAQ : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        $this->load->view('faq', $data);
        // $this->load->view('template/footer', $data);
    }
}

/* End of file Dashboard.php */
