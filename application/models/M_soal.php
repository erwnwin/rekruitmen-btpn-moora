<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_soal extends CI_Model
{

    public function tampil_psikotes($id_jenis_ujian = 1)
    {

        $this->db->select('a.id_soal, a.soal, FROM_UNIXTIME(a.created_on) as created_on, FROM_UNIXTIME(a.updated_on) as updated_on, b.jenis_ujian, c.nama_pengguna');
        $this->db->from('tb_soal a');
        $this->db->join('jenis_ujian b', 'b.id_jenis_ujian=a.id_jenis_ujian');
        $this->db->join('akun_pengguna c', 'c.id_akun_pengguna=a.id_akun_pengguna');
        $this->db->where('a.id_jenis_ujian', $id_jenis_ujian);
        return $this->db->get()->result();
    }

    public function getDataSoal($id, $dosen)
    {
        $this->datatables->select('a.id_soal, a.soal, FROM_UNIXTIME(a.created_on) as created_on, FROM_UNIXTIME(a.updated_on) as updated_on, b.nama_matkul, c.nama_dosen');
        $this->datatables->from('tb_soal a');
        $this->datatables->join('matkul b', 'b.id_matkul=a.matkul_id');
        $this->datatables->join('dosen c', 'c.id_dosen=a.dosen_id');
        if ($id !== null && $dosen === null) {
            $this->datatables->where('a.matkul_id', $id);
        } else if ($id !== null && $dosen !== null) {
            $this->datatables->where('a.dosen_id', $dosen);
        }
        return $this->datatables->generate();
    }

    public function getSoalById($id)
    {
        return $this->db->get_where('tb_soal', ['id_soal' => $id])->row();
    }

    public function getMatkulDosen($nip)
    {
        $this->db->select('matkul_id, nama_matkul, id_dosen, nama_dosen');
        $this->db->join('matkul', 'matkul_id=id_matkul');
        $this->db->from('dosen')->where('nip', $nip);
        return $this->db->get()->row();
    }

    public function getAllDosen()
    {
        $this->db->select('*');
        $this->db->from('dosen a');
        $this->db->join('matkul b', 'a.matkul_id=b.id_matkul');
        return $this->db->get()->result();
    }
}

/* End of file M_soal.php */
