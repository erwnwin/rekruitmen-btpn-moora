<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Sub_kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kriteria');
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Sub Kriteria : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Sub Kriteria";
        $data['kriteria'] = $this->m_kriteria->tampil();
        $data['sub_kriteria'] = $this->m_kriteria->tampil_sub_kriteria_new();
        // $data['sub_kriteria'] = $this->m_kriteria->tampil_sub($id_kriteria);


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kriteria/sub_kriteria');
        $this->load->view('template/footer', $data);
    }

    public function add()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $sub_kriteria = $this->input->post('sub_kriteria');
        $range = $this->input->post('range');
        $subbobot = $this->input->post('subbobot');

        $data = array(
            'id_kriteria' => $id_kriteria,
            'sub_kriteria' => $sub_kriteria,
            'range' => $range,
            'subbobot' => $subbobot,
        );

        $sql = $this->db->query("SELECT * FROM sub_kriteria WHERE id_kriteria='$id_kriteria'");
        $cek = $sql->num_rows();
        if ($cek >= 8) {
            $this->session->set_flashdata('failed', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Gagal</h4>
            Penilaian Sub Kriteria Hanya 4 Aspek </br>
            <b>(1)Kurang (2)Cukup (3)Baik (4)Baik Sekali</b></div>');
            redirect(base_url('sub_kriteria'));
        } else {
            $this->m_kriteria->tambah_sub($data);

            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses</h4>
            Data Sub Kriteria Berhasil disimpan.
            </div>');
            redirect(base_url('sub_kriteria'));
        }
    }


    public function delete($id_sub_kriteria)
    {
        $this->m_app->hapus_sub_kriteria($id_sub_kriteria);
        $this->session->set_flashdata('sukses', 'Data Sub Kriteria berhasil dihapus.');
        redirect(base_url('sub_kriteria'));
    }
}

/* End of file Profil.php */
