<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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


    // public function register_page()
    // {

    //     $this->load->library('image_lib');

    //     $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    //     $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
    //     $this->form_validation->set_rules('alamat_email', 'Alamat Email', 'required|valid_email');
    //     $this->form_validation->set_rules('konfirmasi_email', 'Konfirmasi Email', 'required|matches[alamat_email]|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'required');
    //     $this->form_validation->set_rules('konfirmasi_pass', 'Konfirmasi Password', 'required|matches[password]');
    //     $this->form_validation->set_rules('captcha', 'Captcha', 'required');
    //     $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
    //     $userCaptcha = $this->input->post('userCaptcha');

    //     if ($this->form_validation->run() == FALSE) {
    //         //random number
    //         $random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    //         //setting captcha config
    //         $vals = array(
    //             'word' => $random_number,
    //             'img_path' => 'assets/captcha/',
    //             'img_url' => base_url() . 'assets/captcha/',
    //             'img_width' => '170',
    //             'img_height' => 50,
    //             'expiration' => 7200
    //         );
    //         $data['captcha'] = create_captcha($vals);
    //         $this->session->set_userdata('captchaWord', $data['captcha']['word']);

    //         // $this->session->set_flashdata('gagal', 'Silahkan cek kembali data anda dengan benar');
    //         $this->load->view('register_page', $data);
    //     } else {
    //         $this->session->unset_userdata('captchaWord');
    //         $this->session->set_flashdata('sukses', 'Registrasi akun berhasil dilakukan. Silahkan cek email untuk verifikasi akun anda.');
    //         $this->register_aksi();
    //     }
    // }

    // public function check_captcha($str)
    // {
    //     $word = $this->session->userdata('captchaWord');
    //     if (strcmp(strtoupper($str), strtoupper($word)) == 0) {
    //         return true;
    //     } else {
    //         $this->form_validation->set_message('check_captcha', 'Captcha Salah');
    //         return false;
    //     }
    // }

    public function registration()
    {

        $path = "./assets/captcha/";

        if (!file_exists($path)) {
            $buat = mkdir($path, 0777);
            if (!$buat) {
                return;
            }
        }


        // huruf acak
        $kata = array_merge(range('0', '9'), range('A', 'Z'));
        $acak = shuffle($kata);
        $str = substr(implode($kata), 0, 5);

        $data_ses = array('captcha_str' => $str);
        $this->session->set_userdata($data_ses);

        $vals = array(
            'word' => $str,
            'img_path' => $path,
            'img_url' => base_url() . 'assets/captcha/',
            'img_width' => '170',
            'img_height' => 50,
            'expiration' => 7200
        );
        $capc = create_captcha($vals);
        $data['captcha_image'] = $capc['image'];


        $this->form_validation->set_rules('nama_lengkap', '*Nama Lengkap', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('alamat_email', 'Alamat Email', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('konfirmasi_email', 'Alamat Email', 'required|matches[alamat_email]', array('required' => '%s tidak boleh kosong', 'matches' => '%s tidak sama'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('konfirmasi_pass', 'Password', 'required|matches[password]', array('required' => '%s tidak boleh kosong', 'matches' => '%s tidak sama'));
        // $this->form_validation->set_rules('konfirmasi_pass', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required', array('required' => '%s tidak boleh kosong'));

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "Registrasi Akun : E-Rekuitmen BTPN KC Makassar";
            $data['title1'] = "Dashboard";

            $this->load->view('register_page', $data);
        } else {

            $nama_lengkap = $this->input->post('nama_lengkap', true);
            // $alamat_email = htmlspecialchars($this->input->post('alamat_email', true));
            $alamat_email = $this->input->post('alamat_email', true);
            // $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            // $no_ktp = $this->input->post('no_ktp');

            $data = array(

                'nama_lengkap' => htmlspecialchars($nama_lengkap),
                'alamat_email' => htmlspecialchars($alamat_email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_ktp' => $this->input->post('no_ktp'),
                'is_active' => 0,
                'role_id' => 3,
                'date_created' => time()
            );

            $sql = $this->db->query("SELECT alamat_email FROM akun_calon_pegawai where alamat_email='$alamat_email'");
            $cek = $sql->num_rows();
            if ($cek > 0) {
                $this->session->set_flashdata('gagal', 'Email telah didaftarkan sebelumnya. Silahkan cek email untuk verifikasi akun');
                redirect(base_url('register/registration'));
            } else {

                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'alamat_email' => $alamat_email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('akun_calon_pegawai', $data);
                $this->db->insert('user_token', $user_token);

                $this->_sendEmailDaftar($token, 'verify');

                $this->session->set_flashdata('sukses', 'Registrasi akun berhasil dilakukan. Silahkan cek email untuk verifikasi akun anda.');
                redirect(base_url('login_page'));
            }
        }
    }

    private function _sendEmailDaftar($token, $type)
    {
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
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // end config

        $this->email->from('btpnmks01@gmail.com', 'Panitia Rekrutmen BTPN KC Makassar');
        $this->email->to($this->input->post('alamat_email'));

        if ($type == 'verify') {
            $this->email->subject('Aktivasi Akun Rekrutmen BTPN KC Makassar');
            $this->email->message('
            <p class="text-uppercase"> Hai ' . $this->input->post('nama_lengkap') . ',</p>
    
            <p style="text-align: justify;"> Terima kasih atas pendaftaran Anda di Portal Rekrutmen BTPN KC Makassar. Silahkan klik pada <em>link</em> berikut untuk mengaktifkan keanggotaan Anda secara otomatis.</p>
    
            <center>
            <a href="' . base_url() . 'register/verify?alamat_email=' . $this->input->post('alamat_email') . '&token=' . urlencode($token) . '" style=" padding: 0.6em 2em; color: #fff; background-color: #1976d2;font-size: 1.1em;border: 0;cursor: pointer; margin: 1em;"> Aktivasi Akun</a>
            </center>
    
            <br>
            <p style="text-align: justify; margin-top: 8px;">Selanjutnya, segera lengkapi data <em>Curriculum Vitae</em> dan dokumen persyaratan sebelum melamar 
                <em>Job Vacancies</em> pada BTPN KC Makassar yang tersedia.</p>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $alamat_email = $this->input->get('alamat_email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('akun_calon_pegawai', ['alamat_email' => $alamat_email])->row_array();


        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() -  $user_token['date_created'] < (60 * 60 * 24)) {

                    $this->db->set('is_active', 1);
                    $this->db->where('alamat_email', $alamat_email);
                    $this->db->update('akun_calon_pegawai');
                    $this->db->delete('user_token', ['alamat_email' => $alamat_email]);

                    $this->session->set_flashdata('sukses', 'Akun anda telah terverifikasi. Silahkan login untuk melengkapi data anda.');
                } else {

                    $this->db->delete('akun_calon_pegawai', ['alamat_email' => $alamat_email]);
                    $this->db->delete('user_token', ['alamat_email' => $alamat_email]);

                    $this->session->set_flashdata('gagal', 'Verifikasi telah berakhir. Silahkan registrasi ulang akun anda.');
                    redirect(base_url('register/registration'));
                }
            } else {
                $this->session->set_flashdata('sukses', 'Akun anda telah terverifikasi. Silahkan login untuk melengkapi data anda.');
                redirect(base_url('login_page'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'Verifikasi akun gagal dilakukan. Periksa kembali email anda.');
            redirect(base_url('register/registration'));
        }
    }

    public function register_page()
    {
        $path = "./assets/captcha/";

        if (!file_exists($path)) {
            $buat = mkdir($path, 0777);
            if (!$buat) {
                return;
            }
        }


        // huruf acak
        $kata = array_merge(range('0', '9'), range('A', 'Z'));
        $acak = shuffle($kata);
        $str = substr(implode($kata), 0, 5);

        $data_ses = array('captcha_str' => $str);
        $this->session->set_userdata($data_ses);

        $vals = array(
            'word' => $str,
            'img_path' => $path,
            'img_url' => base_url() . 'assets/captcha/',
            'img_width' => '170',
            'img_height' => 50,
            'expiration' => 7200
        );
        $capc = create_captcha($vals);
        $data['captcha_image'] = $capc['image'];


        $this->form_validation->set_rules('nama_lengkap', '*Nama Lengkap', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('alamat_email', 'Alamat Email', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('konfirmasi_email', 'Alamat Email', 'required|matches[alamat_email]', array('required' => '%s tidak boleh kosong', 'matches' => '%s tidak sama'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('konfirmasi_pass', 'Password', 'required|matches[password]', array('required' => '%s tidak boleh kosong', 'matches' => '%s tidak sama'));
        // $this->form_validation->set_rules('konfirmasi_pass', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required', array('required' => '%s tidak boleh kosong'));


        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "Registrasi Akun : E-Rekuitmen BTPN KC Makassar";
            $data['title1'] = "Dashboard";

            $this->load->view('register_page', $data);
        } else {

            $this->register_aksi();
        }


        // // $this->load->view('template/header', $data);
        // // $this->load->view('template/sidebar', $data);
        // $this->load->view('register_page', $data);
        // // $this->load->view('template/footer', $data);
    }

    public function register_aksi()
    {

        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $password = $this->input->post('password');
        $no_ktp = $this->input->post('no_ktp');

        $data = array(

            'nama_lengkap' => $nama_lengkap,
            'alamat_email' => $alamat_email,
            'password' => $password,
            'no_ktp' => $no_ktp,
            'is_active' => 0,
        );

        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');

        $sql = $this->db->query("SELECT alamat_email FROM akun_calon_pegawai where alamat_email='$alamat_email'");
        $cek = $sql->num_rows();
        if ($cek > 0) {

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
            $this->load->library('email', $config);
            $this->email->initialize($config);
            // end config
            // 6L1LyRfK64a6W8J)IhNx
            // dQ8=XC>z*G{Q\!K>

            $this->email->from('btpnmks01@gmail.com', 'Panitia Rekrutmen BTPN KC Makassar');
            $this->email->to($alamat_email);
            $this->email->subject('Pemberitahuan Akun Telah Terdaftar');
            $this->email->message('
            <p>Mohon Maaf</p>
    
            <p style="text-align:justify;">Akun anda telah didaftarkan sebelumnya. Mohon cek email/spam/promosi pada akun email anda. Terima Kasih, Sukses selalu.</p>
            ');

            $this->email->send();
            // akhir send email

            $this->session->set_flashdata('gagal', 'Email telah didaftarkan sebelumnya. Silahkan cek email untuk verifikasi akun');
            redirect(base_url('register/register_page'));
        } else {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $alamat_email = $this->input->post('alamat_email');
            $token = $this->input->post('token');

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'alamat_email' => $alamat_email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->m_pengguna->tambah($data);
            $this->m_pengguna->tambah_token($user_token);

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
            $this->load->library('email', $config);
            $this->email->initialize($config);
            // end config
            // 6L1LyRfK64a6W8J)IhNx
            // dQ8=XC>z*G{Q\!K>

            $this->email->from('btpnmks01@gmail.com', 'Panitia Rekrutmen BTPN KC Makassar');

            $this->email->to($alamat_email);
            $this->email->subject('Aktivasi Akun Rekrutmen BTPN KC Makassar');
            $this->email->message('
            <p> Hai <span class="text-uppercase">' . ucfirst($nama_lengkap) . '</span>, </p>

                <p style="text-align: justify;"> Terima kasih atas pendaftaran Anda di Portal Rekrutmen BTPN KC Makassar. Silahkan klik pada <em>link</em> berikut untuk mengaktifkan keanggotaan Anda secara otomatis.</p>
   
                <center>
                <a href="' . base_url() . 'register/verify?alamat_email=' . $this->input->post('alamat_email') . '&token=' . $token . '" style=" padding: 0.6em 2em; color: #fff; background-color: #1976d2;font-size: 1.1em;border: 0;cursor: pointer; margin: 1em;"> Aktivasi Akun</a>
                </center>


                <p style="text-align: justify;">Selanjutnya, segera lengkapi data <em>Curriculum Vitae</em> dan dokumen persyaratan sebelum melamar 
                    <em>job vacancies</em> pada BTPN KC Makassar yang tersedia.</p>');

            $this->email->send();
            // akhir send email

            // $this->session->set_flashdata('sukses', 'Silahkan cek kembali data anda dengan benar');
            $this->session->set_flashdata('sukses', 'Registrasi akun berhasil dilakukan. Silahkan cek email untuk verifikasi akun anda.');
            redirect(base_url('register/register_page'));
        }
    }
}

/* End of file Dashboard.php */
