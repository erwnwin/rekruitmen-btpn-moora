<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_ujian extends CI_Model
{
    public function getJumlahSoal($id_akun_pengguna)
    {
        $this->db->select('COUNT(id_soal) as jml_soal');
        $this->db->from('tb_soal');
        $this->db->where('id_akun_pengguna', $id_akun_pengguna);
        return $this->db->get()->row();
    }

    public function tampil_ujian()
    {
        $this->db->from('m_ujian');
        $this->db->join('jenis_ujian', 'm_ujian.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        return $this->db->get()->result();
    }

    public function getUjianById($id)
    {
        $this->db->select('*');
        $this->db->from('m_ujian a');
        $this->db->join('akun_pengguna b', 'a.id_akun_pengguna=b.id_akun_pengguna');
        $this->db->join('jenis_ujian c', 'a.id_jenis_ujian=c.id_jenis_ujian');
        $this->db->where('id_ujian', $id);
        return $this->db->get()->row();
    }


    public function getIdCp($id_akun_calon_pegawai)
    {
        $this->db->select('*');
        $this->db->from('akun_calon_pegawai a');
        // $this->db->join('kelas b', 'a.kelas_id=b.id_kelas');
        // $this->db->join('jurusan c', 'b.jurusan_id=c.id_jurusan');
        $this->db->where('id_akun_calon_pegawai', $id_akun_calon_pegawai);
        return $this->db->get()->row();
    }
}

/* End of file M_ujian.php */
