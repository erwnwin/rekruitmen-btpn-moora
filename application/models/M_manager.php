<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_manager extends CI_Model
{
    public function get_all_nilai()
    {
        $this->db->select('*');
        $this->db->from('penilaian_bmanager');
        $this->db->order_by('id_nilai');
        $this->db->where('id_job');
        return $this->db->get()->result();
    }

    public function get_alternatif_by_id()
    {
        $this->db->order_by('id_alternatif', 'asc');
        $this->db->where('id_job');
        $query = $this->db->get('alternatif_new');
        return $query->result();
    }

    function get_kriteria_by_id()
    {
        $this->db->order_by('id_kriteria', 'asc');
        $query = $this->db->get('kriteria');
        return $query->result();
    }

    public function get_niai_setiap_alternatif($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM penilaian_bmanager WHERE id_akun_calon_pegawai = '$id_alternatif' AND id_kriteria = '$id_kriteria';");

        return $query->row_array();
    }

    public function get_data_penilaian($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM penilaian_bmanager WHERE id_akun_calon_pegawai= '$id_alternatif' AND id_kriteria = '$id_kriteria'");

        return $query->row_array();
    }

    public function get_nilai_setiap_alternatif()
    {
        $query = $this->db->query("SELECT DISTINCT akun_calon_pegawai.nama_lengkap, akun_calon_pegawai.id_akun_calon_pegawai 
        FROM akun_calon_pegawai 
        JOIN penilaian_bmanager ON akun_calon_pegawai.id_akun_calon_pegawai = penilaian_bmanager.id_akun_calon_pegawai;");

        return $query->result();
    }

    public function normalisasi_nilai($id_kriteria) // optimasi nilai
    {
        $query = $this->db->query("SELECT SQRT(SUM(POWER(total_nilai, 2))) AS nilai_pembagian FROM penilaian_bmanager WHERE id_kriteria='$id_kriteria';");

        return $query->row_array();
    }

    public function pembobotan_nilai($id_kriteria) // pembobotan nilai
    {
        $query = $this->db->query("SELECT ((total_nilai / nilai_pembagian) * kriteria.bobot) AS pembobotan_setiap_nilai, kriteria.bobot, kriteria.tipe 
		FROM penilaian_bmanager JOIN (SELECT SQRT(SUM(POWER(total_nilai, 2))) AS nilai_pembagian FROM penilaian_bmanager WHERE fk_id_kriteria='$id_kriteria') AS bobot_nilai 
		JOIN kriteria ON kriteria.id_kriteria = penilaian_bmanager.id_kriteria 
        WHERE kriteria.id_kriteria='$id_kriteria' GROUP BY penilaian_bmanager.id_akun_calon_pegawai");

        return $query->row_array();
    }


    public function hasil_nilai($id_alternatif)
    {
        $query = $this->db->query("SELECT * FROM alternatif_new WHERE id_alternatif='$id_alternatif';");
        return $query->row_array();
    }
}

/* End of file M_teller.php */
