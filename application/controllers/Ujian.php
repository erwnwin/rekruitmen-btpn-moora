<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master');
        $this->load->model('m_soal');
        $this->load->model('m_ujian');
        $this->load->helper('my');
        $this->load->model('m_data');
    }

    public function index()
    {
        $data['title'] = "Tes Online : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Tes Online";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $data['peserta'] = $this->db->query('SELECT tb_peserta.id_peserta, 
        jenis_ujian.jenis_ujian, 
        jenis_ujian.id_jenis_ujian, 
        akun_calon_pegawai.nama_lengkap, 
        akun_calon_pegawai.no_ktp, tanggal_ujian, 
        jam_ujian, durasi_ujian,  status_ujian 
        FROM tb_peserta, jenis_ujian, akun_calon_pegawai
        WHERE tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian 
        and tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian 
        and tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai 
        and akun_calon_pegawai.nama_lengkap="' . $this->session->userdata('nama_lengkap') . '" ')->result();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/tes_online', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }


    public function mulai_ujian()
    {
        $id_peserta = $this->uri->segment(3);
        $id = $this->db->query('SELECT * FROM tb_peserta WHERE id_peserta="' . $id_peserta . '"  ')->row_array();
        $soal_ujian = $this->db->query('SELECT * FROM tb_soal_ujian WHERE id_jenis_ujian="' . $id['id_jenis_ujian'] . '" ORDER BY RAND()');
        $where = array('id_peserta' => $id_peserta);
        $data2 = array('status_ujian_ujian' => 1);
        $this->m_data->update_data($where, $data2, 'tb_peserta');
        $time = $id['timer_ujian'];
        $data = array(
            "soal" => $soal_ujian->result(),
            "total_soal" => $soal_ujian->num_rows(),
            "max_time" => $time,
            "id" => $id
        );
        $this->load->view('template_ujian/v_soalujian', $data);
    }


    public function jawab_aksi()
    {
        $id_peserta = $this->input->post('id_peserta');
        $jumlah     = $_POST['jumlah_soal'];
        $id_soal     = $_POST['soal'];
        $jawaban     = $_POST['jawaban'];
        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id_soal[$i];
            $jawaban[$nomor];
            $data[] = array(
                'id_peserta' => $id_peserta,
                'id_soal_ujian' => $nomor,
                'jawaban' => $jawaban[$nomor]
            );
        }
        $this->db->insert_batch('tb_jawaban', $data);
        $cek = $this->db->query('SELECT id_jawaban, jawaban, tb_soal_ujian.kunci_jawaban FROM tb_jawaban join tb_soal_ujian ON tb_jawaban.id_soal_ujian=tb_soal_ujian.id_soal_ujian WHERE id_peserta="' . $id_peserta . '"');
        $jumlah = $cek->num_rows();
        foreach ($cek->result_array() as $d) {
            $where = $d['id_jawaban'];
            if ($d['jawaban'] == $d['kunci_jawaban']) {
                $data = array(
                    'skor' => 1,
                );
                $this->m_data->UpdateNilai($where, $data, 'tb_jawaban');
            } else {
                $data = array(
                    'skor' => 0,
                );
                $this->m_data->UpdateNilai($where, $data, 'tb_jawaban');
            }
        }

        $benar = 0;
        $salah = 0;
        $total_nilai = 0;
        $cek2 = $this->db->query('SELECT id_jawaban, jawaban, skor, tb_soal_ujian.kunci_jawaban FROM tb_jawaban join tb_soal_ujian ON tb_jawaban.id_soal_ujian=tb_soal_ujian.id_soal_ujian WHERE id_peserta="' . $id_peserta . '"');
        $jumlah = $cek2->num_rows();
        $where = $id_peserta;
        foreach ($cek2->result_array() as $c) {
            if ($c['jawaban'] == $c['kunci_jawaban']) {
                $benar++;
            } else {
                $salah++;
            }
            $total_nilai += $c['skor'] / $jumlah * 100;
        }
        $data = array(
            'benar' => $benar,
            'salah' => $salah,
            'status_ujian' => 2,
            'status_ujian_ujian' => 2,
            'nilai' => $total_nilai
        );
        $this->m_data->UpdateNilai2($where, $data, 'tb_peserta');
        redirect(base_url('jadwal_ujian'));
    }
}

/* End of file Ujian.php */
