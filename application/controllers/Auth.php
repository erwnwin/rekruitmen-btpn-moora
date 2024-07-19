<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengguna');
    }


    public function login()
    {
        $data['title'] = "Login : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        $this->load->view('v_login_new', $data);
        // $this->load->view('template/footer', $data);
    }

    public function register()
    {
        $data['title'] = "Registrasi Akun : E-Rekuitmen BTPN KC Makassar";
        $data['title1'] = "Dashboard";

        // $this->load->view('template/header', $data);
        // $this->load->view('template/sidebar', $data);
        $this->load->view('v_regis_new', $data);
        // $this->load->view('template/footer', $data);
    }

    public function register_aksi()
    {

        $nama_lengkap_pengguna = $this->input->post('nama_lengkap_pengguna');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hak_akses = $this->input->post('hak_akses');
        $email = $this->input->post('email');

        $data = array(

            'nama_lengkap_pengguna' => $nama_lengkap_pengguna,
            'username' => $username,
            'password' => $password,
            'hak_akses' => $hak_akses,
            'email' => $email,
        );

        $sql = $this->db->query("SELECT email FROM pengguna where email='$email'");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $config =
                [
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_user' => 'umkmmks20@gmail.com',
                    'smtp_pass' => 'kplcihdvidihhgtb',
                    'smtp_port' => 465,
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"

                ];
            $this->load->library('email', $config);
            $this->email->initialize($config);
            // end config
            // 6L1LyRfK64a6W8J)IhNx
            // dQ8=XC>z*G{Q\!K>

            $this->email->from('umkmmks20@gmail.com', 'Akun Telah Terdaftar');
            $this->email->to($email);
            $this->email->subject('Pemberitahuan Akun Berhasil Didaftarkan');
            $this->email->message('Akun anda berhasil didaftarkan. Notifikasi melalui email akan dikirim kembali jika proses verifikasi pada Admin telah dilakukan. Terima Kasih, Sukses selalu');

            $this->email->send();
            // akhir send email

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
            <h6><i class="fas fa-check"></i><b> Gagal!</b></h6>
           Email anda telah didaftarkan sebelumnya!
        </div>');
            redirect(base_url('auth/register'));
        } else {
            $this->m_pengguna->tambah($data);

            $config =
                [
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_user' => 'umkmmks20@gmail.com',
                    'smtp_pass' => 'kplcihdvidihhgtb',
                    'smtp_port' => 465,
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"

                ];
            $this->load->library('email', $config);
            $this->email->initialize($config);
            // end config
            // 6L1LyRfK64a6W8J)IhNx
            // dQ8=XC>z*G{Q\!K>

            $this->email->from('umkmmks20@gmail.com', 'Akun Telah Didaftarkan Sebelunya');
            $this->email->to($email);
            $this->email->subject('Pemberitahuan Akun Telah Didaftarkan Sebelumnya');
            $this->email->message('Akun anda telah didaftarkan sebelumnya. Silahkan menggunakan akun email terbaru. Terima Kasih, Sukses selalu');

            $this->email->send();
            // akhir send email

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
            <h6><i class="fas fa-check"></i><b> Sukses!</b></h6>
            Berhasil didaftarkan. Notifikasi email dikirimkan ke email terdaftar anda. Terima Kasih!
        </div>');
            redirect(base_url('auth/register'));
        }
    }
}

/* End of file Dashboard.php */
