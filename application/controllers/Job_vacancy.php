<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Job_vacancy extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
        $this->load->model('m_pelamar');
    }


    public function index()
    {
        $data['title'] = "Lowongan : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Lowongan Tersedia";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();
        // $data['pendidikan'] = $this->m_pelamar->pendidikan($data['user']['id_akun_calon_pegawai']);

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');

        $data['pendidikan'] = $this->db->query("SELECT * FROM pendidikan
            JOIN jurusan ON pendidikan.id_jurusan=jurusan.id_jurusan
            WHERE pendidikan.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();


        $data['dokumen'] = $this->db->query("SELECT * FROM dokumen_kel
            JOIN akun_calon_pegawai ON dokumen_kel.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            WHERE dokumen_kel.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $data['lamar'] = $this->db->query("SELECT * FROM pendidikan
                JOIN jurusan ON pendidikan.id_jurusan=jurusan.id_jurusan
                WHERE pendidikan.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $data['job'] = $this->db->query("SELECT * FROM job_vacancies WHERE status_job='open' ORDER BY id_job")->result();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/lowongan', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }


    public function lamar_proses()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $id_job = $this->input->post('id_job');

        $sql = $this->db->query("SELECT * FROM alternatif_new where id_job='$id_job' and id_akun_calon_pegawai='$id_akun_calon_pegawai' ");
        $cek = $sql->num_rows();
        if ($cek == $id_job > 0) {
            // $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            // $id_job = $this->input->post('id_job');
            // $kode_alternatif = $this->input->post('kode_alternatif');
            // // $asal_kampus = $this->input->post('asal_kampus');
            // // $kampus_opsi = $this->input->post('kampus_opsi');
            // // $status_kampus = $this->input->post('status_kampus');
            // // $ipk = $this->input->post('ipk');
            // // $id_jurusan = $this->input->post('id_jurusan');
            // // $jurusan_opsi = $this->input->post('jurusan_opsi');
            // // $status_lulus = $this->input->post('status_lulus');
            // // $tgl_ijazah = $this->input->post('tgl_ijazah');

            // $data = array(
            //     'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
            //     'id_job' => $id_job,
            //     'kode_alternatif' => $kode_alternatif,
            //     // 'asal_kampus' => $asal_kampus,
            //     // 'kampus_opsi' => $kampus_opsi,
            //     // 'status_kampus' => $status_kampus,
            //     // 'ipk' => $ipk,
            //     // 'id_jurusan' => $id_jurusan,
            //     // 'jurusan_opsi' => $jurusan_opsi,
            //     // 'status_lulus' => $status_lulus,
            //     // 'tgl_ijazah' => $tgl_ijazah
            // );

            // $where = array(
            //     'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            // );

            // // $this->m_pelamar->update_data($where, $data, 'alternatif');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('gagal', 'Saudara/i telah melakukan lamaran pada posisi ini');
            redirect(base_url('job_vacancy'));
        } else {
            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $id_job = $this->input->post('id_job');
            $kode_alternatif = $this->input->post('kode_alternatif');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'id_job' => $id_job,
                'kode_alternatif' => $kode_alternatif

            );

            // $where = array(
            //     'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            // );

            // $this->m_pelamar->update_data($where, $data, 'pendidikan');
            $this->m_pelamar->input_data($data, 'alternatif_new');
            $this->session->set_flashdata('sukses', 'Lamaran anda telah direkam. Terima kasih atas partisipasi anda');
            redirect(base_url('job_vacancy'));
        }
    }
}

/* End of file Dashboard.php */
