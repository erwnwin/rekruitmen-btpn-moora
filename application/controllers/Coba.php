<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_alternatif');
        $this->load->model('m_kriteria');
        $this->load->model('m_penilaian');
        $this->load->model('m_app');
    }

    public function index()
    {
        $data['title'] = "Alternatif : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Data Alternatif ~ Penilaian Calon Pegawai";
        $data['pengguna'] = $this->m_alternatif->tampil_pengguna();
        $data['al'] = $this->m_penilaian->tampil_alternatif();
        $data['kriteria'] = $this->m_kriteria->tampil();
        $data['kriteria1'] = $this->m_kriteria->jumlah();

        $data['job'] = $this->m_alternatif->view_job();
        // $data['job'] = $this->m_alternatif->view_job();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/coba', $data);
        $this->load->view('template/footer', $data);
    }


    public function insert()
    {

        $kriteria = $this->input->post('total');
        $id_job = $this->input->post('id_job');


        if ($id_job == '1') {
            for ($i = 1; $i <= $kriteria; $i++) {
                $value = 'kriteria' . $i;
                $data = [
                    'id_job' => $this->input->post('id_job'),
                    'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
                    'id_kriteria' => $i,
                    'total_nilai' => $this->input->post($value),
                ];
                $this->m_penilaian->insert_nilai_teller($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                 Data Penilaian Gagal disimpan.
                </div>');
            }
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses</h4>
                Data Penilaian Berhasil disimpan.
                </div>');
            redirect(base_url('alternatif_penilaian'));
        } elseif ($id_job == '2') {
            for ($i = 1; $i <= $kriteria; $i++) {
                $value = 'kriteria' . $i;
                $data = [
                    'id_job' => $this->input->post('id_job'),
                    'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
                    'id_kriteria' => $i,
                    'total_nilai' => $this->input->post($value),
                ];
                $this->m_penilaian->insert_nilai_hrd($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                 Data Penilaian Gagal disimpan.
                </div>');
            }
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses</h4>
                Data Penilaian Berhasil disimpan.
                </div>');
            redirect(base_url('alternatif_penilaian'));
        } elseif ($id_job == '3') {
            for ($i = 1; $i <= $kriteria; $i++) {
                $value = 'kriteria' . $i;
                $data = [
                    'id_job' => $this->input->post('id_job'),
                    'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
                    'id_kriteria' => $i,
                    'total_nilai' => $this->input->post($value),
                ];
                $this->m_penilaian->insert_nilai_manager($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                 Data Penilaian Gagal disimpan.
                </div>');
            }
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses</h4>
                Data Penilaian Berhasil disimpan.
                </div>');
            redirect(base_url('alternatif_penilaian'));
        } elseif ($id_job == '4') {
            for ($i = 1; $i <= $kriteria; $i++) {
                $value = 'kriteria' . $i;
                $data = [
                    'id_job' => $this->input->post('id_job'),
                    'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
                    'id_kriteria' => $i,
                    'total_nilai' => $this->input->post($value),
                ];
                $this->m_penilaian->insert_nilai_cs($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                 Data Penilaian Gagal disimpan.
                </div>');
            }
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses</h4>
                Data Penilaian Berhasil disimpan.
                </div>');
            redirect(base_url('alternatif_penilaian'));
        } elseif ($id_job == '5') {
            for ($i = 1; $i <= $kriteria; $i++) {
                $value = 'kriteria' . $i;
                $data = [
                    'id_job' => $this->input->post('id_job'),
                    'id_akun_calon_pegawai' => $this->input->post('id_akun_calon_pegawai'),
                    'id_kriteria' => $i,
                    'total_nilai' => $this->input->post($value),
                ];
                $this->m_penilaian->insert_nilai_public($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                 Data Penilaian Gagal disimpan.
                </div>');
            }
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses</h4>
                Data Penilaian Berhasil disimpan.
                </div>');
            redirect(base_url('alternatif_penilaian'));
        }
    }

    function teruskan_ke_pimpinan()
    {
        $result = array();
        foreach ($_POST['rank'] as $key => $val) {
            $result[] = array(
                'id_job' => $_POST['id_job'][$key],
                'id_akun_calon_pegawai' => $_POST['id_akun_calon_pegawai'][$key],
                'nilai_optimasi' => $_POST['nilai_optimasi'][$key],
                'rank' => $_POST['rank'][$key]
            );
        }
        $this->db->insert_batch('hasil_penilaian', $result);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('perhitungan_moora/posisi_teller'));
    }

    public function delete_teller()
    {
        $id_akun_calon_pegawai = $_POST['id_akun_calon_pegawai']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
        $this->m_app->delete($id_akun_calon_pegawai); // Panggil fungsi delete dari model
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('perhitungan_moora/posisi_teller'));
    }

    public function kirim_pesan()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $alamat_email = $this->input->post('alamat_email');
        $pesan = $this->input->post('pesan');
        $nama_lengkap = $this->input->post('nama_lengkap');

        $data = array(
            'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
            'pesan' => $pesan,
        );

        $config =
            [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'btpnmks01@gmail.com',
                'smtp_pass' => 'dhditsarzegjpoeq',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"

            ];

        $this->email->from('btpnmks01@gmail.com', 'Panitia Rekrutmen BTPN KC Makassar');
        $this->email->to($this->input->post('alamat_email'));

        $this->email->subject('Pengumuman Hasil Seleksi Rekrutmen BTPN KC Makassar');
        $this->email->message('Hai, Saudara/i' . $nama_lengkap . 'SELAMAT, Saudara/i dinyatakan LULUS dalam Seleksi Calon Pegawai BTPN KC Makassar. Persiapkan diri saudara/i untuk melayani masyarakat dengan senang hati. </br></br>
        
        Send by Panitia Rekrutmen BPTN KC Makassar </br>
        Terima Kasih. </br></br>
        Email ini tidak untuk dibalas. </br>
        &copy; 2023.
        ');

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->send();
        // end config

        //Send mail
        if ($this->m_app->tambah_pesan($data)) {
            $this->session->set_flashdata('sukses', 'Pesan berhasil dikirim');
            redirect(base_url('hasil_penilaian'));
        } else {
            $this->session->set_flashdata('gagal', 'Pesan berhasil dikirim');
            redirect(base_url('hasil_penilaian'));
        }
    }

    function save_nilai()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai[]');

        $sql = $this->db->query("SELECT * FROM hasil_penilaian where id_akun_calon_pegawai='$id_akun_calon_pegawai'");
        $cek = $sql->num_rows();
        if ($cek > 1) {
            $this->session->set_flashdata('gagal', 'Data Calon Pegawai sudah ada');
            redirect(base_url('perhitungan_moora/posisi_teller'));
        } else {

            $id_job = $_POST['id_job'];
            $id_akun_calon_pegawai = $_POST['id_akun_calon_pegawai'];
            $nilai_optimasi = $_POST['nilai_optimasi'];
            $rank = $_POST['rank'];

            $data = array();

            $index = 0;

            foreach ($id_akun_calon_pegawai as $data_id) {
                array_push($data, array(
                    'id_akun_calon_pegawai' => $data_id,
                    'id_job' => $id_job[$index],
                    'nilai_optimasi' => $nilai_optimasi[$index],
                    'rank' => $rank[$index],
                ));
                $index++;
            }

            $this->m_penilaian->save_batch_lap($data);
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('perhitungan_moora/posisi_teller'));
        }
    }


    function save_peringkat()
    {
        $id_akun_calon_pegawai = $_POST['id_akun_calon_pegawai'];

        $sql = $this->db->query("SELECT * FROM hasil_penilaian where id_akun_calon_pegawai='$id_akun_calon_pegawai'");
        $cek = $sql->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('gagal', 'Data Calon Pegawai sudah ada');
            redirect(base_url('perhitungan_moora/posisi_teller'));
        } else {

            $id_job = $_POST['id_job'];
            $id_akun_calon_pegawai = $_POST['id_akun_calon_pegawai'];
            $nilai_optimasi = $_POST['nilai_optimasi'];
            // $rank = $_POST['rank'];

            $data = array();

            $index = 0;

            foreach ($id_akun_calon_pegawai as $data_id) {
                array_push($data, array(
                    'id_akun_calon_pegawai' => $data_id,
                    'id_job' => $id_job[$index],
                    'nilai_optimasi' => $nilai_optimasi[$index],
                    // 'rank' => $rank[$index],
                ));
                $index++;
            }

            $this->m_penilaian->save_batch_peringkat($data);
            $this->session->set_flashdata('sukses', 'Data peringkat berhasil diset');
            redirect(base_url('perhitungan_moora/posisi_teller'));
        }
    }
}

/* End of file Coba.php */
