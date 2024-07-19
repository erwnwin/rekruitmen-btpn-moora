<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_alternatif extends CI_Model
{
    public function tampil()
    {
        $this->db->from('alternatif');
        return $this->db->get()->result();
    }

    public function tampil_pengguna()
    {
        $this->db->from('pengguna');
        $this->db->where('hak_akses', 'Calon Pegawai');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        return $this->db->insert('alternatif', $data);
    }

    public function tambah_sub($data)
    {
        return $this->db->insert('sub_kriteria', $data);
    }

    public function pengguna_tampil($id_pengguna)
    {
        $this->db->select("*");
        $this->db->from('sub_kriteria');
        $this->db->join('kriteria', 'sub_kriteria.id_pengguna=kriteria.id_pengguna');
        $this->db->where('sub_kriteria.id_pengguna', $id_pengguna);
        return $this->db->get()->result();
    }



    public function view_job()
    {
        return $this->db->get('job_vacancies')->result(); // Tampilkan semua data yang ada di tabel kelas
    }


    public function viewByJob($id_job)
    {
        $this->db->where('id_job', $id_job);
        $result = $this->db->get('alternatif_new')->result(); // Tampilkan semua data jadwal berdasarkan id kelas (kel_id);
        die(var_dump($result));
    }
}
