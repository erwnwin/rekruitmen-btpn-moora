<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Curiculum_vitae extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
        $this->load->model('m_pelamar');
        $this->load->model('m_wilayah');

        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Lamaran Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "CV Saya";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();


        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
        $data['kabupaten'] = $this->m_wilayah->get_all_kab();
        $data['kecamatan'] = $this->m_wilayah->get_all_kec();

        $data['kota'] = $this->m_wilayah->get_all_kota();
        $data['kampus'] = $this->m_wilayah->get_all_kampus();
        $data['jurusan'] = $this->m_wilayah->get_all_jurusan();


        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['data_diri'] = $this->db->query("SELECT * FROM data_diri
                JOIN akun_calon_pegawai ON data_diri.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
                WHERE data_diri.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        // $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['alamat'] = $this->db->query("SELECT * FROM alamat
            JOIN akun_calon_pegawai ON alamat.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            JOIN wilayah_provinsi ON alamat.provinsi=wilayah_provinsi.id
            JOIN wilayah_kabupaten ON alamat.kota_kab=wilayah_kabupaten.id
            JOIN wilayah_kecamatan ON alamat.kecamatan=wilayah_kecamatan.id
            WHERE alamat.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();


        $data['pendidikan'] = $this->db->query("SELECT * FROM pendidikan
            JOIN akun_calon_pegawai ON pendidikan.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            JOIN kota_institusi ON pendidikan.kota_institusi=kota_institusi.id
            JOIN asal_kampus ON pendidikan.asal_kampus=asal_kampus.id
            JOIN jurusan ON pendidikan.id_jurusan=jurusan.id_jurusan
            WHERE pendidikan.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $data['dokumen'] = $this->db->query("SELECT * FROM dokumen_kel
            JOIN akun_calon_pegawai ON dokumen_kel.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
           
            WHERE dokumen_kel.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $data['pengalaman'] = $this->db->query("SELECT * FROM pengalaman_kerja
            JOIN akun_calon_pegawai ON pengalaman_kerja.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
            WHERE pengalaman_kerja.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $data['psiko'] = $this->db->query("SELECT * FROM tb_peserta
        JOIN akun_calon_pegawai ON tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
        WHERE tb_peserta.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        // $data['data_diri'] = $this->m_app->data_diri($data['user']['id_akun_calon_pegawai']);

        // $alamat_email = $this->session->userdata('alamat_email');
        // $data['user'] = $this->db->query("SELECT * FROM akun_calon_pegawai 
        // WHERE alamat_email='$alamat_email' ")
        //     ->result();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/curiculum_vitae', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    public function update()
    {
        $data['title'] = "Ubah Lamaran Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();


        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/curiculum_vitae_final', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }


    function update_data_diri()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $sql = $this->db->query("SELECT id_akun_calon_pegawai FROM data_diri where id_akun_calon_pegawai='$id_akun_calon_pegawai' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $kontak = $this->input->post('kontak');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $status_nikah = $this->input->post('status_nikah');
            $agama = $this->input->post('agama');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'kontak' => $kontak,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'status_nikah' => $status_nikah,
                'agama' => $agama
            );

            $where = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            );

            $this->m_pelamar->update_data($where, $data, 'data_diri');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/data_diri'));
        } else {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $kontak = $this->input->post('kontak');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $status_nikah = $this->input->post('status_nikah');
            $agama = $this->input->post('agama');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'kontak' => $kontak,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'status_nikah' => $status_nikah,
                'agama' => $agama
            );



            $this->m_pelamar->input_data($data, 'data_diri');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/data_diri'));
        }
    }


    function update_dok_ktp()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $sql = $this->db->query("SELECT id_akun_calon_pegawai FROM dokumen_kel where id_akun_calon_pegawai='$id_akun_calon_pegawai' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $ktp = $_FILES['ktp']['name'];

            if ($ktp = '') {
            } else {
                $config['upload_path'] = './upload/berkas';
                $config['allowed_types'] = 'jpg|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktp')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $ktp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'ktp' => $ktp,

            );

            $where = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            );

            $this->m_pelamar->update_data($where, $data, 'dokumen_kel');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/dokumen_kelengkapan'));
        } else {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $ktp = $_FILES['ktp']['name'];

            if ($ktp = '') {
            } else {
                $config['upload_path'] = './upload/berkas';
                $config['allowed_types'] = 'jpg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktp')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $ktp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'ktp' => $ktp,

            );

            // $where = array(
            //     'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            // );

            $this->m_pelamar->input_data($data, 'dokumen_kel');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/dokumen_kelengkapan'));
        }
    }


    public function update_dok_ijazah_1()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $ijazah_terakhir = $_FILES['ijazah_terakhir']['name'];

        if ($ijazah_terakhir = '') {
        } else {
            $config['upload_path'] = './upload/berkas';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('ijazah_terakhir')) {
                $this->session->set_flashdata('gagal', 'File gagal diupload');
            } else {
                $ijazah_terakhir = $this->upload->data('file_name');
            }
        }

        $sql = "UPDATE dokumen_kel SET ijazah_terakhir='$ijazah_terakhir' WHERE id_akun_calon_pegawai=$id_akun_calon_pegawai";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('curiculum_vitae_final/dokumen_kelengkapan'));
    }


    public function update_dok_transkrip_nilai()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $transkrip_nilai = $_FILES['transkrip_nilai']['name'];

        if ($transkrip_nilai = '') {
        } else {
            $config['upload_path'] = './upload/berkas';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('transkrip_nilai')) {
                $this->session->set_flashdata('gagal', 'File gagal diupload');
            } else {
                $transkrip_nilai = $this->upload->data('file_name');
            }
        }

        $sql = "UPDATE dokumen_kel SET transkrip_nilai='$transkrip_nilai' WHERE id_akun_calon_pegawai=$id_akun_calon_pegawai";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('curiculum_vitae_final/dokumen_kelengkapan'));
    }


    public function update_dok_tamabahan()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $dok_tambahan = $_FILES['dok_tambahan']['name'];

        if ($dok_tambahan = '') {
        } else {
            $config['upload_path'] = './upload/berkas';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dok_tambahan')) {
                $this->session->set_flashdata('gagal', 'File gagal diupload');
            } else {
                $dok_tambahan = $this->upload->data('file_name');
            }
        }

        $sql = "UPDATE dokumen_kel SET dok_tambahan='$dok_tambahan' WHERE id_akun_calon_pegawai=$id_akun_calon_pegawai";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('curiculum_vitae_final/dokumen_kelengkapan'));
    }

    function update_alamat()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $sql = $this->db->query("SELECT id_akun_calon_pegawai FROM alamat where id_akun_calon_pegawai='$id_akun_calon_pegawai' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $alamat_ktp = $this->input->post('alamat_ktp');
            $provinsi = $this->input->post('provinsi');
            $kota_kab = $this->input->post('kota_kab');
            $kecamatan = $this->input->post('kecamatan');
            $kode_pos = $this->input->post('kode_pos');
            $alamat_domisili = $this->input->post('alamat_domisili');
            $provinsi_dom = $this->input->post('provinsi_dom');
            $kota_kab_dom = $this->input->post('kota_kab_dom');
            $kecamatan_dom = $this->input->post('kecamatan_dom');
            $kode_pos_dom = $this->input->post('kode_pos_dom');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'alamat_ktp' => $alamat_ktp,
                'provinsi' => $provinsi,
                'kota_kab' => $kota_kab,
                'kecamatan' => $kecamatan,
                'kode_pos' => $kode_pos,
                'alamat_domisili' => $alamat_domisili,
                'provinsi_dom' => $provinsi_dom,
                'kota_kab_dom' => $kota_kab_dom,
                'kecamatan_dom' => $kecamatan_dom,
                'kode_pos_dom' => $kode_pos_dom
            );

            $where = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            );

            $this->m_pelamar->update_data($where, $data, 'alamat');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/alamat'));
        } else {

            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $alamat_ktp = $this->input->post('alamat_ktp');
            $provinsi = $this->input->post('provinsi');
            $kota_kab = $this->input->post('kota_kab');
            $kecamatan = $this->input->post('kecamatan');
            $kode_pos = $this->input->post('kode_pos');
            $alamat_domisili = $this->input->post('alamat_domisili');
            $provinsi_dom = $this->input->post('provinsi_dom');
            $kota_kab_dom = $this->input->post('kota_kab_dom');
            $kecamatan_dom = $this->input->post('kecamatan_dom');
            $kode_pos_dom = $this->input->post('kode_pos_dom');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'alamat_ktp' => $alamat_ktp,
                'provinsi' => $provinsi,
                'kota_kab' => $kota_kab,
                'kecamatan' => $kecamatan,
                'kode_pos' => $kode_pos,
                'alamat_domisili' => $alamat_domisili,
                'provinsi_dom' => $provinsi_dom,
                'kota_kab_dom' => $kota_kab_dom,
                'kecamatan_dom' => $kecamatan_dom,
                'kode_pos_dom' => $kode_pos_dom,
            );



            $this->m_pelamar->input_data($data, 'alamat');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/alamat'));
        }
    }
}

/* End of file Dashboard.php */
