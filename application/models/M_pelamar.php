<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pelamar extends CI_Model
{

    public function pendidikan($index_data = NULL)
    {
        $this->db->select(
            'akun_calon_pegawai.*, pendidikan.id_akun_calon_pegawai AS id_akun_calon_pegawai, 
        pendidikan.jenjang_pendidikan,
        pendidikan.kota_institusi,
        pendidikan.asal_kampus,
        pendidikan.kampus_opsi,
        pendidikan.status_kampus,
        pendidikan.id_jurusan,
        pendidikan.jurusan_opsi,
        pendidikan.status_lulus,
        pendidikan.tgl_ijazah,
        pendidikan.ipk'
        );
        $this->db->join('pendidikan', 'akun_calon_pegawai.id_akun_calon_pegawai = pendidikan.id_akun_calon_pegawai');
        // $this->db->join('pendidikan', 'kota_institusi.id = pendidikan.kota_institusi');
        $this->db->from('akun_calon_pegawai');
        if ($index_data != NULL) {
            $this->db->where('pendidikan.id_akun_calon_pegawai', $index_data);
        }

        $query = $this->db->get();
        return $query->result();
    }


    public function pendidikan1($id_akun_calon_pegawai)
    {
        $this->db->select("*");
        $this->db->from("pendidikan");
        $this->db->join("akun_calon_pegawai", "pendidikan.id_akun_calon_pegawai = akun_calon_pegawai.id_akun_calon_pegawai");
        $this->db->join("kota_institusi", "pendidikan.kota_institusi = kota_institusi.id");
        // $this->db->join("orang_tua", "pendidikan.kode_ortu = orang_tua.kode_ortu");
        $this->db->where("pendidikan.id_akun_calon_pegawai", $id_akun_calon_pegawai);
        return $this->db->get()->row();
    }


    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus($id_akun_calon_pegawai)
    {
        $this->db->where('id_akun_calon_pegawai', $id_akun_calon_pegawai);
        return $this->db->delete('pendidikan');
    }
}

/* End of file M_pelamar.php */
