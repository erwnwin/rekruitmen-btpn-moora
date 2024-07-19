<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Backoffice extends CI_Controller
{

    // public function index()
    // {
    //     $data['title'] = "Login Backoffice : Assesment Calon Pegawai BANK BTPN KC Makassar";
    //     $data['title1'] = "Dashboard";

    //     $this->load->view('backoffice_login', $data);
    // }

    public function login_page()
    {

        $this->form_validation->set_rules('alamat_email', 'Alamat Email', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        // $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required', array('required' => '%s tidak boleh kosong'));

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login Backoffice : Assesment Calon Pegawai BANK BTPN KC Makassar";
            $data['title1'] = "Dashboard";

            $this->load->view('backoffice_login', $data);
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $alamat_email = $this->input->post('alamat_email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('akun_pengguna', ['alamat_email' => $alamat_email])->row_array();

        //user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'alamat_email' => $user['alamat_email'],
                        'id_akun_pengguna' => $user['id_akun_pengguna'],
                        'nama_pengguna' => $user['nama_pengguna'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('sukses', 'Selamat Datang ' .$user['nama_pengguna']. ' Anda Berhasil Login.');

                        redirect(base_url('dashboard'));
                    } elseif ($user['role_id'] == 2) {
                        $this->session->set_flashdata('sukses', 'Selamat Datang ' .$user['nama_pengguna']. ' Anda Berhasil  Login.');

                        redirect(base_url('dashboard'));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Password yang anda masukkan salah.');
                    // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                    // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    // <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                    // Password yang anda masukkan salah.
                    // </div>');
                    redirect(base_url('backoffice/login_page'));
                }
            } else {
                $this->session->set_flashdata('gagal', 'Email anda belum diaktivasi');
                // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                // <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                // Email anda belum diaktivasi.
                // </div>');
                redirect(base_url('backoffice/login_page'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'Email tidak belum terdaftar. Silahkan lakukan registrasi akun');
            // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            // <h4><i class="icon fa fa-ban"></i> Gagal</h4>
            // Email belum terdaftar. Silahkan lakukan registrasi akun.
            // </div>');
            redirect(base_url('backoffice/login_page'));
        }
    }
}

/* End of file Backoffice.php */
