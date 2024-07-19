<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Curiculum_vitae_final extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
        $this->load->model('m_wilayah');
        $this->load->model('m_pelamar');
        $this->load->model('m_unduh');

        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Data Diri Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();


        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['data_diri'] = $this->db->query("SELECT * FROM data_diri
                JOIN akun_calon_pegawai ON data_diri.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
                WHERE data_diri.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        // $data['data_diri'] = $this->m_app->data_diri($data['user']['id_akun_calon_pegawai']);

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/curiculum_vitae_final', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }


    public function data_diri()
    {
        $data['title'] = "Data Diri Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $data['data_diri'] = $this->m_app->data_diri($data['user']['id_akun_calon_pegawai']);

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/cv_data_diri', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    // start pendidikan
    public function pendidikan()
    {
        $data['title'] = "Pendidikan Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $data['pendidikan'] = $this->m_pelamar->pendidikan($data['user']['id_akun_calon_pegawai']);

        $data['kota'] = $this->m_wilayah->get_all_kota();
        $data['jurusan'] = $this->m_wilayah->get_all_jurusan();
        $data['kampus'] = $this->m_wilayah->get_all_kampus();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/pendidikan', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    function update()
    {

        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');

        $sql = $this->db->query("SELECT id_akun_calon_pegawai FROM pendidikan where id_akun_calon_pegawai='$id_akun_calon_pegawai' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {
            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
            $kota_institusi = $this->input->post('kota_institusi');
            $asal_kampus = $this->input->post('asal_kampus');
            $kampus_opsi = $this->input->post('kampus_opsi');
            $status_kampus = $this->input->post('status_kampus');
            $ipk = $this->input->post('ipk');
            $id_jurusan = $this->input->post('id_jurusan');
            $jurusan_opsi = $this->input->post('jurusan_opsi');
            $status_lulus = $this->input->post('status_lulus');
            $tgl_ijazah = $this->input->post('tgl_ijazah');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'jenjang_pendidikan' => $jenjang_pendidikan,
                'kota_institusi' => $kota_institusi,
                'asal_kampus' => $asal_kampus,
                'kampus_opsi' => $kampus_opsi,
                'status_kampus' => $status_kampus,
                'ipk' => $ipk,
                'id_jurusan' => $id_jurusan,
                'jurusan_opsi' => $jurusan_opsi,
                'status_lulus' => $status_lulus,
                'tgl_ijazah' => $tgl_ijazah
            );

            $where = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            );

            $this->m_pelamar->update_data($where, $data, 'pendidikan');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/pendidikan'));
        } else {
            $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
            $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
            $kota_institusi = $this->input->post('kota_institusi');
            $asal_kampus = $this->input->post('asal_kampus');
            $kampus_opsi = $this->input->post('kampus_opsi');
            $status_kampus = $this->input->post('status_kampus');
            $ipk = $this->input->post('ipk');
            $id_jurusan = $this->input->post('id_jurusan');
            $jurusan_opsi = $this->input->post('jurusan_opsi');
            $status_lulus = $this->input->post('status_lulus');
            $tgl_ijazah = $this->input->post('tgl_ijazah');

            $data = array(
                'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
                'jenjang_pendidikan' => $jenjang_pendidikan,
                'kota_institusi' => $kota_institusi,
                'asal_kampus' => $asal_kampus,
                'kampus_opsi' => $kampus_opsi,
                'status_kampus' => $status_kampus,
                'ipk' => $ipk,
                'id_jurusan' => $id_jurusan,
                'jurusan_opsi' => $jurusan_opsi,
                'status_lulus' => $status_lulus,
                'tgl_ijazah' => $tgl_ijazah
            );

            // $where = array(
            //     'id_akun_calon_pegawai' => $id_akun_calon_pegawai
            // );

            // $this->m_pelamar->update_data($where, $data, 'pendidikan');
            $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('curiculum_vitae_final/pendidikan'));
        }
    }

    public function pendidikan_delete($id_akun_calon_pegawai)
    {
        $this->m_pelamar->hapus($id_akun_calon_pegawai);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('curiculum_vitae_final/pendidikan'));
    }
    // End pendidikan

    public function alamat()
    {
        $data['title'] = "Alamat Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";

        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
        $data['kabupaten'] = $this->m_wilayah->get_all_kab();
        $data['kecamatan'] = $this->m_wilayah->get_all_kec();

        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['alamat'] = $this->db->query("SELECT * FROM alamat
                JOIN akun_calon_pegawai ON alamat.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
                JOIN wilayah_provinsi ON alamat.provinsi=wilayah_provinsi.id
                JOIN wilayah_kabupaten ON alamat.kota_kab=wilayah_kabupaten.id
                JOIN wilayah_kecamatan ON alamat.kecamatan=wilayah_kecamatan.id
                WHERE alamat.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();


        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/alamat', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    public function pengalaman_kerja()
    {
        $data['title'] = "Pengalaman Kerja Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $data['pengalaman'] = $this->db->query("SELECT * FROM pengalaman_kerja
            JOIN akun_calon_pegawai ON pengalaman_kerja.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
           
            WHERE pengalaman_kerja.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();

        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/pengalaman_kerja', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }

    public function dokumen_kelengkapan()
    {
        $data['title'] = "Dokumen Kelengkapan Saya : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "My Curiculum Vitae";
        $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();

        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');

        $data['dokumen'] = $this->db->query("SELECT * FROM dokumen_kel
        JOIN akun_calon_pegawai ON dokumen_kel.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
        WHERE dokumen_kel.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();


        $this->load->view('templ_pelamar/head', $data);
        $this->load->view('templ_pelamar/sidebar', $data);
        $this->load->view('pelamar/dokumen_kelengkapan', $data);
        $this->load->view('templ_pelamar/footer', $data);
    }





    function add_ajax_kampus($id_kota)
    {
        // $data['user'] = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $this->session->userdata('alamat_email')])->row_array();
        // $data['pendidikan'] = $this->m_pelamar->pendidikan($data['user']['id_akun_calon_pegawai']);

        $query = $this->db->get_where('asal_kampus', array('kota_institusi_id' => $id_kota));

        $data = "<option>Pilihan</option><option value='ada'>Lainnya</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }


    function add_ajax_kab($id_prov)
    {

        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option disable selected>-- Pilih Kabupaten/Kota --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab)
    {
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option disabled selected>-- Pilih Kecamatan --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id_kec)
    {
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option disabled selected>-- Pilih Desa --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }


    public function unduh()
    {
        $this->load->library('dompdf_gen');

        $data['title'] = "Unduh Curiculum Vitae Saya";
        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');
        $nama_lengkap = $this->session->userdata('nama_lengkap');

        // $data['data_diri'] = $this->db->query("SELECT * FROM data_diri
        //         JOIN akun_calon_pegawai ON data_diri.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
        //         WHERE data_diri.id_akun_calon_pegawai='$id_akun_calon_pegawai' ")->result();
        $data['dd'] = $this->m_unduh->unduh_cv($this->uri->segment('3'));
        $this->load->view('unduh_berkas/unduh_cv', $data);

        $paper_size = 'Letter';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("CV-Saya-" . $nama_lengkap . ".pdf", array('Attachment' => 0));
    }

    function add_pengalaman()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $jabatan = $this->input->post('jabatan');
        $tgl_bekerja = $this->input->post('tgl_bekerja');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $status_pegawai = $this->input->post('status_pegawai');
        $peran_tj = $this->input->post('peran_tj');

        $data = array(
            'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'tgl_bekerja' => $tgl_bekerja,
            'tgl_selesai' => $tgl_selesai,
            'status_pegawai' => $status_pegawai,
            'peran_tj' => $peran_tj,
        );

        $this->m_pelamar->input_data($data, 'pengalaman_kerja');

        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('curiculum_vitae_final/pengalaman_kerja'));
    }
}

/* End of file Dashboard.php */
