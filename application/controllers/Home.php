<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Home : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        $this->load->view('home1', $data);
        // $this->load->view('template/footer', $data);
    }
}

/* End of file Dashboard.php */
