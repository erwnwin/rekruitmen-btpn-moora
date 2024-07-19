<?php

defined('BASEPATH') or exit('No direct script access allowed');

class My_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('alamat_email')) {
        //     redirect(base_url('login_page'));
        // }

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Dashboard : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/mydashboard', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        // <h4><i class="icon fa fa-check"></i> Keluar</h4>
        // Anda Berhasil Logout.
        // </div>');
        redirect(base_url('login_page'));
    }
}

/* End of file Dashboard.php */
