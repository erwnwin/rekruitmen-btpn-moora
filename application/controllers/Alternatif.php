<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_alternatif');
    }

    public function index()
    {
        $data['title'] = "Calon Pegawai : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Calon Pegawai";
        $data['alternatif'] = $this->m_alternatif->tampil();
        // $data['pengguna'] = $this->m_alternatif->tampil_pengguna();
        $data['job'] = $this->m_alternatif->view_job();



        $data['cv'] = $this->db->query("SELECT * FROM alternatif_new 
        JOIN akun_calon_pegawai ON alternatif_new.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai")->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('alternatif/alternatif');
        $this->load->view('template/footer', $data);
    }

    public function add()
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $id_pengguna = $this->input->post('id_pengguna');

        $data = array(
            'kode_alternatif' => $kode_alternatif,
            'id_pengguna' => $id_pengguna,
        );

        $this->m_alternatif->tambah($data);

        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses</h4>
        Data Alternatif Berhasil disimpan.
        </div>');

        redirect(base_url('alternatif'));
    }


    function add_ajax_al($id_job)
    {

        $query = $this->db->query("SELECT * FROM alternatif_new 
        JOIN akun_calon_pegawai ON alternatif_new.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai 
        JOIN job_vacancies ON alternatif_new.id_job=job_vacancies.id_job 
        WHERE alternatif_new.id_job='$id_job'");
        // $query = $this->db->get_where('alternatif_new', array('id_job' => $id_job));
        $data = " ";

        $data .= "

  
        <hr>
           
        <table class='table table-bordered table-hover' id='example1'>
            <thead>
            <tr>
                <th style='width: 10px'>#</th>
                <th style='text-align:center'>Posisi/jabatan</th>
                <th style='text-align:center'>Nama Calon Pegawai</th>
               
            </tr>
        </thead>
     

       ";

        foreach ($query->result() as $value) {
            // $no = ;
            // $no++;
            $data .= "
          
            <tbody>
                        <td>#</td>
                        <td>" . $value->job . "</td>
                        <td class='text-uppercase'>" . $value->nama_lengkap . "</td>
                           
        </tbody>        
               
                        ";
        }
        echo $data;
    }

    function preview_cv()
    {
    }
}

/* End of file Profil.php */
