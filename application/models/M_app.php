<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{

    public function tampil()
    {
        $this->db->from('jurusan');
        return $this->db->get()->result();
    }

    public function tambah_pesan($data)
    {
        return $this->db->insert('kotak_masuk', $data);
    }

    public function tampil_pengguna()
    {
        $this->db->from('akun_pengguna');
        return $this->db->get()->result();
    }

    public function delete($id_akun_calon_pegawai)
    {
        $this->db->where_in('id_akun_calon_pegawai', $id_akun_calon_pegawai);
        $this->db->delete('penilaian_teller');
    }

    public function hapus($id_akun_pengguna)
    {
        $this->db->where('id_akun_pengguna', $id_akun_pengguna);
        return $this->db->delete('akun_pengguna');
    }


    public function hapus_sub_kriteria($id_sub_kriteria)
    {
        $this->db->where('id_sub_kriteria', $id_sub_kriteria);
        return $this->db->delete('sub_kriteria');
    }

    public function hapus_teller($id_akun_calon_pegawai)
    {
        $this->db->where('id_akun_calon_pegawai', $id_akun_calon_pegawai);
        return $this->db->delete('akun_calon_pegawai');
    }

    public function proses_edit($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('job_vacancies', $data);
    }

    public function proses_edit_profil($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('akun_pengguna', $data);
    }

    public function proses_edit_kriteria($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('kriteria', $data);
    }

    public function tampil_job()
    {
        $this->db->from('job_vacancies');
        return $this->db->get()->result();
    }


    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function data_diri($index_data = NULL)
    {
        $this->db->select(
            'akun_calon_pegawai.*, data_diri.id_akun_calon_pegawai AS id_akun_calon_pegawai, 
        data_diri.kontak,
        data_diri.tempat_lahir,
        data_diri.tanggal_lahir,
        data_diri.jenis_kelamin,
        data_diri.status_nikah,
        data_diri.agama,'
        );
        $this->db->join('data_diri', 'akun_calon_pegawai.id_akun_calon_pegawai = data_diri.id_akun_calon_pegawai');
        $this->db->from('akun_calon_pegawai');
        if ($index_data != NULL) {
            $this->db->where('data_diri.id_akun_calon_pegawai', $index_data);
        }

        $query = $this->db->get();
        return $query->result();
    }


    public function dokumen($index_data = NULL)
    {
        $this->db->select(
            'akun_calon_pegawai.*, dokumen_kel.id_akun_calon_pegawai AS id_akun_calon_pegawai, 
        dokumen_kel.ktp,
        dokumen_kel.ijazah_terakhir,
        dokumen_kel.transkrip_nilai,
        dokumen_kel.dok_tambahan,'
        );
        $this->db->join('dokumen_kel', 'akun_calon_pegawai.id_akun_calon_pegawai = dokumen_kel.id_akun_calon_pegawai');
        $this->db->from('akun_calon_pegawai');
        if ($index_data != NULL) {
            $this->db->where('dokumen_kel.id_akun_calon_pegawai', $index_data);
        }

        $query = $this->db->get();
        return $query->result();
    }

    /* End of file M_app.php */
}
