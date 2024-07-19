<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    public function tambah($data)
    {
        return $this->db->insert('akun_calon_pegawai', $data);
    }

    public function tambah_token($data)
    {
        return $this->db->insert('user_token', $data);
    }
}

/* End of file M_pengguna.php */
