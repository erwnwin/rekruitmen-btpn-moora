<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Pengguna : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Pengguna";

        $data['pengguna'] = $this->m_app->tampil_pengguna();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengguna/pengguna');
        $this->load->view('template/footer', $data);
    }


    function tambah_aksi()
    {
        $is_active = $this->input->post('is_active');
        $nama_pengguna = $this->input->post('nama_pengguna');
        $alamat_email = $this->input->post('alamat_email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $role_id = $this->input->post('role_id');

        $data = array(
            'is_active' => $is_active,
            'nama_pengguna' => $nama_pengguna,
            'alamat_email' => $alamat_email,
            'password' => $password,
            'role_id' => $role_id
        );


        $this->m_app->input_data($data, 'akun_pengguna');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Tersimpan</h4>
        Data Berhasil disimpan!
        </div>');
        redirect(base_url('pengguna'));
    }


    public function delete($id_akun_pengguna)
    {
        $this->m_app->hapus($id_akun_pengguna);
        $this->session->set_flashdata('sukses', 'Data Pengguna berhasil dihapus.');
        redirect(base_url('pengguna'));
    }
}

/* End of file Profil.php */
