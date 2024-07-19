<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_unduh extends CI_Model
{
    public function unduh_cv($id_akun_calon_pegawai)
    {
        $id_akun_calon_pegawai = $this->session->userdata('id_akun_calon_pegawai');

        $this->db->from('akun_calon_pegawai');
        $this->db->where('akun_calon_pegawai.id_akun_calon_pegawai', $id_akun_calon_pegawai);
        $this->db->join('data_diri', 'akun_calon_pegawai.id_akun_calon_pegawai=data_diri.id_akun_calon_pegawai');
        // $this->db->join('jabatan', 'guru.id_akun_calon_pegawai=jabatan.id_akun_calon_pegawai');
        // $this->db->join('sk_guru', 'guru.id_akun_calon_pegawai=sk_guru.id_akun_calon_pegawai');
        return $this->db->get()->row();
    }
}

/* End of file m_unduh.php */
