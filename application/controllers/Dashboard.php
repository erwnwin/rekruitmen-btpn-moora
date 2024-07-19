<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Dashboard : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        $data['pengguna'] = $this->db->query("SELECT * FROM akun_pengguna ")->num_rows();
        $data['kriteria'] = $this->db->query("SELECT * FROM kriteria ")->num_rows();
        $data['calon_pegawai'] = $this->db->query("SELECT * FROM akun_calon_pegawai ")->num_rows();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard');
        $this->load->view('template/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        // <h4><i class="icon fa fa-check"></i> Keluar</h4>
        // Anda Berhasil Logout.
        // </div>');
        redirect(base_url('backoffice/login_page'));
    }
}

/* End of file Dashboard.php */
