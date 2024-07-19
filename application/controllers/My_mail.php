<?php

defined('BASEPATH') or exit('No direct script access allowed');

class My_mail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Kotak Masuk : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Kotak Masuk";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['kotak_masuk'] = $this->db->query("SELECT * FROM kotak_masuk
                JOIN akun_calon_pegawai ON kotak_masuk.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
                WHERE kotak_masuk.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/kotak_masuk', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }
}

/* End of file Dashboard.php */
