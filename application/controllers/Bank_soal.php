<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bank_soal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master');
        $this->load->model('m_data');
        $this->load->model('m_soal');
    }


    public function index()
    {
        $data['title'] = "Bank Soal : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Bank Soal";

        if (isset($_GET['id'])) {
            $id = $this->input->get('id');
            $data['soal_ujian'] = $this->db->query('SELECT * from tb_soal_ujian join jenis_ujian where tb_soal_ujian.id_jenis_ujian=jenis_ujian.id_jenis_ujian and jenis_ujian.id_jenis_ujian="' . $id . '" order by id_soal_ujian desc')->result();
            $data['ujian'] = $this->m_data->get_data('jenis_ujian')->result();
        } else {
            $data['soal_ujian'] = $this->db->query('SELECT * FROM tb_soal_ujian join jenis_ujian ON tb_soal_ujian.id_jenis_ujian=jenis_ujian.id_jenis_ujian order by id_soal_ujian desc')->result();
            $data['ujian'] = $this->m_data->get_data('jenis_ujian')->result();
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/index');
        $this->load->view('template/footer', $data);
    }

    public function edit($id)
    {
        $where = array('id_soal_ujian' => $id);

        $data['ujian'] = $this->m_data->get_data('jenis_ujian')->result();

        $data['title'] = "Edit Soal : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Edir Soal";

        $data['soal'] = $this->db->query("SELECT * FROM tb_soal_ujian WHERE id_soal_ujian='$id'")->result();

        // $data['ujian'] = $this->m_data->get_data('jenis_ujian')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/edit_soal', $data);
        $this->load->view('template/footer', $data);
    }


    public function tambah_soal()
    {
        $data['title'] = "Bank Soal : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Bank Soal";

        $data['ujian'] = $this->m_data->get_data('jenis_ujian')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/tambah_soal', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert()
    {
        $id_jenis_ujian     = $this->input->post('id_jenis_ujian');
        $soal                = $this->input->post('soal');
        $a                     = $this->input->post('a');
        $b                    = $this->input->post('b');
        $c                    = $this->input->post('c');
        $d                    = $this->input->post('d');
        $e                    = $this->input->post('e');
        $kunci                = $this->input->post('kunci');
        $data = array(
            'id_jenis_ujian' => $id_jenis_ujian,
            'pertanyaan' => $soal,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'kunci_jawaban' => $kunci
        );
        if ($id_jenis_ujian == '' || $soal == '') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-ban"></i> Maaf, Input Soal Gagal!</h4> Mata Kuliah dan Pertanyaan Soal tidak boleh dikosongkan.</div>');
            redirect(base_url('bank_soal'));
        } else {
            $this->m_data->insert_data($data, 'tb_soal_ujian');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Selamat, Soal berhasil dibuat!</h4>untuk melihat soal tersebut bisa anda lihat di menu <b>Daftar Soal ujian</b>.</div>');
            redirect(base_url('bank_soal'));
        }
    }
}

/* End of file Setting_ujian.php */
