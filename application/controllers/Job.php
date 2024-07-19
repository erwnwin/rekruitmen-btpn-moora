<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Lowongan : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        $data['job'] = $this->m_app->tampil_job();
        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        $this->load->view('jobs', $data);
        // $this->load->view('template/footer', $data);
    }
}

/* End of file Controllername.php */
