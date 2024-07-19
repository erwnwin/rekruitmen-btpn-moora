<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kriteria');
        $this->load->model('m_app');
    }

    public function index()
    {
        $data['title'] = "Kriteria : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Kriteria";
        $data['kriteria'] = $this->m_kriteria->tampil();
        $data['kriteria1'] = $this->m_kriteria->jumlah();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kriteria/kriteria');
        $this->load->view('template/footer', $data);
    }

    public function add()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $kode_kriteria = $this->input->post('kode_kriteria');
        $kriteria = $this->input->post('kriteria');
        $tipe = $this->input->post('tipe');
        $bobot = $this->input->post('bobot');

        $data = array(
            'id_kriteria' => $id_kriteria,
            'kode_kriteria' => $kode_kriteria,
            'kriteria' => $kriteria,
            'tipe' => $tipe,
            'bobot' => $bobot,
        );

        $this->m_kriteria->tambah($data);

        $this->session->set_flashdata('success', 'Data Kategori berhasil disimpan');

        redirect(base_url('kriteria'));
    }

    public function update_aksi()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $kriteria = $this->input->post('kriteria');
        $tipe = $this->input->post('tipe');
        $bobot = $this->input->post('bobot');

        $data = array(

            'id_kriteria' => $id_kriteria,
            'kriteria' => $kriteria,
            'tipe' => $tipe,
            'bobot' => $bobot,

        );

        $where = array(
            'id_kriteria' => $id_kriteria,
        );
        $this->m_app->proses_edit_kriteria($where, $data);

        $this->session->set_flashdata('sukses', 'Data ' . $kriteria . ' berhasil diedit.');
        redirect(base_url('kriteria'));
    }
}

/* End of file Profil.php */
