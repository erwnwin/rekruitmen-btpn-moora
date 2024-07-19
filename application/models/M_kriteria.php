<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    public function tampil()
    {
        $this->db->from('kriteria');
        return $this->db->get()->result();
    }


    public function tampil_sub_kriteria_new()
    {
        $this->db->from('sub_kriteria');
        return $this->db->get()->result();
    }


    public function jumlah()
    {
        // $this->db->from('kriteria');
        return $this->db->get('kriteria')->num_rows();
    }

    public function tambah($data)
    {
        return $this->db->insert('kriteria', $data);
    }
    public function tambah_sub($data)
    {
        return $this->db->insert('sub_kriteria', $data);
    }

    public function tampil_sub($id_kriteria)
    {
        $this->db->select("*");
        $this->db->from('sub_kriteria');
        $this->db->join('kriteria', 'sub_kriteria.id_kriteria=kriteria.id_kriteria');
        $this->db->where('sub_kriteria.id_kriteria', $id_kriteria);
        return $this->db->get()->result();
    }

    public function tampil_subkriteria($id_kriteria)
    {
        $this->db->select("*");
        $this->db->from('sub_kriteria');
        $this->db->join('kriteria', 'sub_kriteria.id_kriteria=kriteria.id_kriteria');
        $this->db->where('sub_kriteria.id_kriteria', $id_kriteria);
        return $this->db->get()->result();
    }
}
