<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_wilayah extends CI_Model
{

    function get_all_provinsi()
    {
        $this->db->select('*');
        $this->db->from('wilayah_provinsi');
        $query = $this->db->get();

        return $query->result();
    }

    function get_all_kab()
    {
        $this->db->select('*');
        $this->db->from('wilayah_kabupaten');
        $query = $this->db->get();

        return $query->result();
    }



    function get_all_kec()
    {
        $this->db->select('*');
        $this->db->from('wilayah_kecamatan');
        $query = $this->db->get();

        return $query->result();
    }

    function get_all_kota()
    {
        $this->db->select('*');
        $this->db->from('kota_institusi');
        $query = $this->db->get();

        return $query->result();
    }

    function get_all_jurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $query = $this->db->get();

        return $query->result();
    }

    function get_all_kampus()
    {
        $this->db->select('*');
        $this->db->from('asal_kampus');
        $query = $this->db->get();

        return $query->result();
    }
}
 
 /* End of file M_wilayah.php */
