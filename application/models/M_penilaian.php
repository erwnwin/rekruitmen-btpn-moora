<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_penilaian extends CI_Model
{
    public function tambah($data)
    {
        return $this->db->insert('penilaian_cp', $data);
    }

    public function tampil_kr()
    {
        return $this->db->get('kriteria')->result();
    }

    public function tampil_alternatif()
    {
        $this->db->select("*");
        $this->db->from('alternatif');
        $this->db->join('pengguna', 'alternatif.id_pengguna=alternatif.id_pengguna');
        return $this->db->get()->result();
    }

    public function save_batch($data)
    {
        return $this->db->insert_batch('penilaian_cp', $data);
    }


    public function save_batch_lap($data)
    {
        return $this->db->insert_batch('hasil_penilaian', $data);
    }

    public function save_batch_peringkat($data)
    {
        return $this->db->insert_batch('set_peringkat', $data);
    }



    public function insert_nilai($data)
    {
        $this->db->insert('penilaian_cp', $data);
    }

    // Seller
    public function insert_nilai_teller($data)
    {
        $this->db->insert('penilaian_teller', $data);
    }

    // HRD
    public function insert_nilai_hrd($data)
    {
        $this->db->insert('penilaian_hrd', $data);
    }

    // manager
    public function insert_nilai_manager($data)
    {
        $this->db->insert('penilaian_bmanager', $data);
    }

    // cs
    public function insert_nilai_cs($data)
    {
        $this->db->insert('penilaian_cs', $data);
    }

    // public
    public function insert_nilai_public($data)
    {
        $this->db->insert('penilaian_public', $data);
    }
}

/* End of file M_penilaian.php */
