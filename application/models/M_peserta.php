<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_peserta extends CI_Model
{
    public function get_joinpeserta($id)
    {
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->join('jenis_ujian', 'tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        $this->db->join('akun_calon_pegawai', 'tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai');
        // $this->db->join('tb_jenis_ujian', 'tb_peserta.id_jenis_ujian=tb_jenis_ujian.id_jenis_ujian');
        $this->db->where('tb_peserta.id_peserta', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_peserta($idkls, $idsiswa)
    {
        $array = array('job_vacancies.id_job' => $idkls, 'akun_calon_pegawai.id_akun_calon_pegawai' => $idsiswa);
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->join('jenis_ujian', 'tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        $this->db->join('akun_calon_pegawai', 'tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai');
        // $this->db->join('tb_jenis_ujian', 'tb_peserta.id_jenis_ujian=tb_jenis_ujian.id_jenis_ujian');
        // $this->db->join('job_vacancies', 'job_vacancies.id_job=alternatif_new.id_job', 'left');
        $this->db->where($array);
        $this->db->order_by('id_peserta', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_peserta2($idkls)
    {
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->join('jenis_ujian', 'tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        $this->db->join('akun_calon_pegawai', 'tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai');
        // $this->db->join('tb_jenis_ujian', 'tb_peserta.id_jenis_ujian=tb_jenis_ujian.id_jenis_ujian');
        // $this->db->join('job_vacancies', 'job_vacancies.id_job=alternatif_new.id_job', 'left');
        $this->db->where('job_vacancies.id_job', $idkls);
        $this->db->order_by('id_peserta', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_peserta3($idsiswa)
    {
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->join('jenis_ujian', 'tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        $this->db->join('akun_calon_pegawai', 'tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai');
        // $this->db->join('tb_jenis_ujian', 'tb_peserta.id_jenis_ujian=tb_jenis_ujian.id_jenis_ujian');
        // $this->db->join('job_vacancies', 'job_vacancies.id_job=alternatif_new.id_job', 'left');
        $this->db->where('akun_calon_pegawai.id_akun_calon_pegawai', $idsiswa);
        $this->db->order_by('id_peserta', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_peserta4()
    {
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->join('jenis_ujian', 'tb_peserta.id_jenis_ujian=jenis_ujian.id_jenis_ujian');
        $this->db->join('akun_calon_pegawai', 'tb_peserta.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai');
        // $this->db->join('tb_jenis_ujian', 'tb_peserta.id_jenis_ujian=tb_jenis_ujian.id_jenis_ujian');
        // $this->db->join('job_vacancies', 'job_vacancies.id_job=alternatif_new.id_job', 'left');
        $this->db->order_by('id_peserta', 'DESC');
        $query = $this->db->get();
        return $query;
    }


    public function hapus_peserta($id_peserta)
    {
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->delete('tb_peserta');
    }
}
