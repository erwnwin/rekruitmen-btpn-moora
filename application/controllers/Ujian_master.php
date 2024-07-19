<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ujian_master extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ujian');
        $this->load->model('m_master');
    }


    public function index()
    {
        $data['title'] = "Ujian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Ujian";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/master_ujian');
        $this->load->view('template/footer', $data);
    }


    public function buat_ujian()
    {
        $data['title'] = "Buat Ujian : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Buat Ujian Baru";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('ujian/buat_ujian');
        $this->load->view('template/footer', $data);
    }

    public function convert_tgl($tgl)
    {

        return date('Y-m-d H:i:s', strtotime($tgl));
    }

    public function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }


    public function validasi()
    {

        // $user     = $this->ion_auth->user()->row();
        // $dosen     = $this->ujian->getIdDosen($user->username);
        $jml     = $this->m_ujian->getJumlahSoal(
            $this->session->userdata('id_akun_pengguna')
        )->jml_soal;
        $jml_a     = $jml + 1; // Jika tidak mengerti, silahkan baca user_guide codeigniter tentang form_validation pada bagian less_than

        $this->form_validation->set_rules('nama_ujian', 'Nama Ujian', 'required|alpha_numeric_spaces|max_length[50]');
        $this->form_validation->set_rules('jumlah_soal', 'Jumlah Soal', "required|integer|less_than[{$jml_a}]|greater_than[0]", ['less_than' => "Soal tidak cukup, anda hanya punya {$jml} soal"]);
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required|integer|max_length[4]|greater_than[0]');
        $this->form_validation->set_rules('jenis', 'Acak Soal', 'required|in_list[acak,urut]');
    }

    public function save()
    {
        $this->validasi();
        $this->load->helper('string');

        $method         = $this->input->post('method', true);
        $id_akun_pengguna         = $this->input->post('id_akun_pengguna', true);
        $id_jenis_ujian         = $this->input->post('id_jenis_ujian', true);
        $nama_ujian     = $this->input->post('nama_ujian', true);
        $jumlah_soal     = $this->input->post('jumlah_soal', true);
        $tgl_mulai         = $this->convert_tgl($this->input->post('tgl_mulai',     true));
        $tgl_selesai    = $this->convert_tgl($this->input->post('tgl_selesai', true));
        $waktu            = $this->input->post('waktu', true);
        $jenis            = $this->input->post('jenis', true);
        $token             = strtoupper(random_string('alpha', 5));

        if ($this->form_validation->run() === FALSE) {
            $data['status'] = false;
            $data['errors'] = [
                'nama_ujian'     => form_error('nama_ujian'),
                'jumlah_soal'     => form_error('jumlah_soal'),
                'tgl_mulai'     => form_error('tgl_mulai'),
                'tgl_selesai'     => form_error('tgl_selesai'),
                'waktu'         => form_error('waktu'),
                'jenis'         => form_error('jenis'),
            ];

            $this->session->set_flashdata('gagal', 'Soal tidak cukup');
            redirect(base_url('ujian_master/buat_ujian'));
        } else {
            $input = [
                'nama_ujian'     => $nama_ujian,
                'jumlah_soal'     => $jumlah_soal,
                'tgl_mulai'     => $tgl_mulai,
                'terlambat'     => $tgl_selesai,
                'waktu'         => $waktu,
                'jenis'         => $jenis,
            ];
            if ($method === 'add') {
                $input['id_akun_pengguna']    = $id_akun_pengguna;
                $input['id_jenis_ujian'] = $id_jenis_ujian;
                $input['token']        = $token;
                $action = $this->m_master->create('m_ujian', $input);
                $this->session->set_flashdata('sukses', 'Ujian berhasil dibuat');
                redirect(base_url('ujian_master/buat_ujian'));
            } else if ($method === 'edit') {
                $id_ujian = $this->input->post('id_ujian', true);
                $action = $this->m_master->update('m_ujian', $input, 'id_ujian', $id_ujian);
            }
            $data['status'] = $action ? TRUE : FALSE;
        }
        redirect(base_url('ujian_master/buat_ujian'));
    }
}

/* End of file Ujian_master.php */
