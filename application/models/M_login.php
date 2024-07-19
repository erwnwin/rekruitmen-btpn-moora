<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    function auth_user($alamat_email, $password)
    {
        $query = $this->db->query("SELECT * FROM akun_calon_pegawai JOIN user_role WHERE alamat_email='$alamat_email' AND password='$password' AND is_active='1' LIMIT 1 ");
        return $query;
    }
}

/* End of file m_login.php */
