<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login_page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        // $path = "./assets/captcha/";

        // if (!file_exists($path)) {
        //     $buat = mkdir($path, 0777);
        //     if (!$buat) {
        //         return;
        //     }
        // }


        // // huruf acak
        // $kata = array_merge(range('0', '9'), range('A', 'Z'));
        // $acak = shuffle($kata);
        // $str = substr(implode($kata), 0, 5);

        // $data_ses = array('captcha_str' => $str);
        // $this->session->set_userdata($data_ses);

        // $vals = array(
        //     'word' => $str,
        //     'img_path' => $path,
        //     'img_url' => base_url() . 'assets/captcha/',
        //     'img_width' => '170',
        //     'img_height' => 50,
        //     'expiration' => 7200
        // );
        // $capc = create_captcha($vals);
        // $data['captcha_image'] = $capc['image'];

        $this->form_validation->set_rules('alamat_email', 'Alamat Email', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        // $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required', array('required' => '%s tidak boleh kosong'));

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login : E-Rekuitmen BTPN KC Makassar";
            $data['title1'] = "Dashboard";
            $this->load->view('login_page', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $alamat_email = $this->input->post('alamat_email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $alamat_email])->row_array();

        //user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'alamat_email' => $user['alamat_email'],
                        'id_akun_calon_pegawai' => $user['id_akun_calon_pegawai'],
                        'no_ktp' => $user['no_ktp'],
                        'nama_lengkap' => $user['nama_lengkap'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 3) {
                        redirect(base_url('my_dashboard'));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Password yang anda masukkan salah.');
                    redirect(base_url('login_page'));
                }
            } else {
                $this->session->set_flashdata('gagal', 'Email anda belum diaktivasi');
                redirect(base_url('login_page'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'Email tidak belum terdaftar. Silahkan lakukan registrasi akun');
            redirect(base_url('login_page'));
        }
    }
}

/* End of file Dashboard.php */
