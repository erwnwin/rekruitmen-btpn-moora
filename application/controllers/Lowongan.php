<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Lowongan : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Daftar Lowongan";

        $data['jurusan'] = $this->m_app->tampil();
        $data['lowongan'] = $this->m_app->tampil_job();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('lowongan/lowongan');
        $this->load->view('template/footer', $data);
    }


    function tambah_aksi()
    {

        // $job = $this->input->post('job');
        // $id_jurusan = implode(' , ', $this->input->post('id_jurusan', TRUE));
        // $deskripsi_job = $this->input->post('deskripsi_job');
        // $persyaratan = $this->input->post('persyaratan');


        $job = $this->input->post('job');
        // $id_jurusan = implode(' , ', $this->input->post('id_jurusan', TRUE));
        // $id_jurusan = $this->input->post('id_jurusan');
        $deskripsi_job = $this->input->post('deskripsi_job');
        $persyaratan = $this->input->post('persyaratan');

        // $data = array();
        // foreach ($id_jurusan as $key => $value) {
        //     $data[$key]['job'] = $job;
        //     $data[$key]['id_jurusan'] = $value;
        //     $data[$key]['deskripsi_job'] = $deskripsi_job;
        //     $data[$key]['persyaratan'] = $persyaratan;
        // }

        $data = array(
            'job' => $job,
            // 'id_jurusan' => $id_jurusan,
            'deskripsi_job' => $deskripsi_job,
            'persyaratan' => $persyaratan
        );

        // $this->db->insert_batch('job_vacancies', $data);
        $this->m_app->input_data($data, 'job_vacancies');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Tersimpan</h4>
        Data Berhasil disimpan!
        </div>');
        redirect(base_url('lowongan'));
    }

    public function close($id)
    {
        $sql = "UPDATE job_vacancies SET status_job='close' WHERE id_job=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Lowongan ini berhasil ditutup');
        redirect(base_url('lowongan'));
    }

    public function open($id)
    {
        $sql = "UPDATE job_vacancies SET status_job='open' WHERE id_job=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Lowongan ini berhasil dibuka');
        redirect(base_url('lowongan'));
    }

    public function update($id)
    {
        $where = array('id_job' => $id);

        $data['title'] = "Edit Lowongan : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Edit Lowongan";

        $data['job'] = $this->db->query("SELECT * FROM job_vacancies WHERE id_job='$id'")->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('lowongan/edit_lowongan');
        $this->load->view('template/footer', $data);
    }

    function update_aksi()
    {
        $id_job = $this->input->post('id_job');
        $job = $this->input->post('job');
        $deskripsi_job = $this->input->post('deskripsi_job');
        $persyaratan = $this->input->post('persyaratan');

        $data = array(

            'id_job' => $id_job,
            'job' => $job,
            'deskripsi_job' => $deskripsi_job,
            'persyaratan' => $persyaratan,

        );

        $where = array(
            'id_job' => $id_job,
        );
        $this->m_app->proses_edit($where, $data);

        $this->session->set_flashdata('sukses', 'Data ' . $job . ' berhasil diedit.');
        redirect(base_url('lowongan'));
    }
}

/* End of file Lowongan.php */
