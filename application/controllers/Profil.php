<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Profil : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Profil Pengguna";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('profil');
        $this->load->view('template/footer', $data);
    }

    public function ubah_profil($id)
    {
        $where = array('id_akun_pengguna' => $id);

        $data['title'] = "Ubah Profil : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Ubah Profil Pengguna";

        $data['profil'] = $this->db->query("SELECT * FROM akun_pengguna WHERE id_akun_pengguna='$id'")->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ubah_profil');
        $this->load->view('template/footer', $data);
    }

    function update_aksi()
    {
        $id_akun_pengguna = $this->input->post('id_akun_pengguna');
        $nama_pengguna = $this->input->post('nama_pengguna');
        $alamat_email = $this->input->post('alamat_email');
        $role_id = $this->input->post('role_id');

        $data = array(

            'id_akun_pengguna' => $id_akun_pengguna,
            'nama_pengguna' => $nama_pengguna,
            'alamat_email' => $alamat_email,
            'role_id' => $role_id,

        );

        $where = array(
            'id_akun_pengguna' => $id_akun_pengguna,
        );
        $this->m_app->proses_edit_profil($where, $data);

        $this->session->set_flashdata('sukses', 'Data ' . $nama_pengguna . ' berhasil diedit.');
        redirect(base_url('profil'));
    }
}

/* End of file Profil.php */
