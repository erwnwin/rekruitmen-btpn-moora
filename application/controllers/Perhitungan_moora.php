<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan_moora extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_metode');
        $this->load->model('m_posisi');
        $this->load->model('m_alternatif');

        $this->load->model('m_teller');
        $this->load->model('m_hrd');
        $this->load->model('m_manager');
        $this->load->model('m_cs');
        $this->load->model('m_public');
        $this->load->model('m_app');

        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Perhitungan Ranking ~ Metode MOORA";
        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_metode->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_metode->get_kriteria_by_id();
        // $data['job'] = $this->m_metode->get_alternatif_by_id_job();
        $data['nilai'] = $this->m_metode->get_all_nilai();


        $alternatif = [];
        foreach ($this->db->get('penilaian_cp')->result_array() as $key => $value) {
            $alternatif[$value['id_akun_calon_pegawai']] = $value;
        }


        // echo '<pre>';
        // var_dump($warga);
        // die();
        $tranpose = [];
        foreach ($this->db->get('penilaian_cp')->result() as $key => $value) {
            $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
        }
        $data['nilai_cp'] = $tranpose;
        // echo '<pre>';
        // var_dump($tranpose);
        // die();
        $sqrt   = [];
        foreach ($tranpose as $key => $value) {
            $sum = 0;
            foreach ($value as $k => $v) {
                $sum += pow($v, 2);
            }
            $sqrt[$key] = sqrt($sum);
        }
        $data['sqrt'] = $sqrt;
        // echo '<pre>';
        // var_dump($sqrt);
        // die();
        $normalisasi = [];
        foreach ($tranpose as $key => $value) {
            foreach ($value as $k => $v) {
                $normalisasi[$key][$k] = $v / $sqrt[$key];
            }
        }
        $data['normalisasi'] = $normalisasi;

        // echo '<pre>';
        // var_dump($normalisasi);
        // die();

        $kriteria = [];
        foreach ($this->db->get('kriteria')->result() as $key => $value) {
            $kriteria[$value->id_kriteria] = $value;
        }

        $ternormalisasi = [];
        foreach ($normalisasi as $key => $value) {
            foreach ($value as $k => $v) {
                $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
            }
        }
        $data['ternormalisasi'] = $ternormalisasi;

        //  echo '<pre>';
        //  var_dump($ternormalisasi);
        // die();


        $max = [];
        $min = [];
        $tabel_yi = [];
        foreach ($ternormalisasi as $key => $value) {
            $res = 0;
            $res2 = 0;
            foreach ($value as $a => $b) {
                if ($kriteria[$a]->tipe == 1) {
                    // $new_only_benefit[$a] = $b ;
                    $res += $b;
                } else {
                    $res -= 0;
                }
                if ($kriteria[$a]->tipe == 0) {
                    // $new_only_benefit[$a] = $b ;
                    $res2 += $b;
                } else {
                    $res2 -= 0;
                }
            }
            $max[$key] = $res;
            $min[$key] = $res2;
            $tabel_yi[$key] = $res - $res2;
        }
        $data['max'] = $max;
        $data['min'] = $min;
        $data['tabel_yi'] = $tabel_yi;


        // echo '<pre>';
        // var_dump($tabel_yi);
        // die();

        $rankings = array_unique($tabel_yi);
        rsort($rankings);

        $result_data = [];
        $i = 1;
        foreach ($rankings as $key => $value) {
            $result_data["" . $value] = $i;
            $i++;
        }


        $text_rank = [];
        foreach ($tabel_yi as $key => $value) {
            $rank = $result_data["" . $value];
            $pegawai[$key]['value'] = $value;
            $pegawai[$key]['rank'] = $rank;
            $text_rank[] = $pegawai[$key];
        }

        function compareOrder($a, $b)
        {
            return ($a['rank'] > $b['rank'] ? true : false);
        }
        usort($text_rank, 'compareOrder');
        $data['sorted_rank_data'] = $text_rank;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/perhitungan_moora_new', $data);
        $this->load->view('template/footer', $data);
    }



    function filter()
    {
        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Perhitungan Ranking Berdasarkan Posisi";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_posisi->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_posisi->get_kriteria_by_id();
        $data['nilai'] = $this->m_posisi->get_all_nilai();

        // $keyword = $this->input->get('keyword');
        // $data['alternatif'] = $this->m_posisi->search($keyword);


        $alternatif = [];
        foreach ($this->db->get('penilaian_cp')->result_array() as $key => $value) {
            $alternatif[$value['id_akun_calon_pegawai']] = $value;
        }

        // echo '<pre>';
        // var_dump($warga);
        // die();
        $tranpose = [];
        foreach ($this->db->get('penilaian_cp')->result() as $key => $value) {
            $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai]
                = $value->total_nilai;
        }

        $data['nilai_cp'] = $tranpose;
        // echo '<pre>';
        // var_dump($tranpose);
        // die();
        $sqrt   = [];
        foreach ($tranpose as $key => $value) {
            $sum = 0;
            foreach ($value as $k => $v) {
                $sum += pow($v, 2);
            }
            $sqrt[$key] = sqrt($sum);
        }
        $data['sqrt'] = $sqrt;
        // echo '<pre>';
        // var_dump($sqrt);
        // die();
        $normalisasi = [];
        foreach ($tranpose as $key => $value) {
            foreach ($value as $k => $v) {
                $normalisasi[$key][$k] = $v / $sqrt[$key];
            }
        }
        $data['normalisasi'] = $normalisasi;

        // echo '<pre>';
        // var_dump($normalisasi);
        // die();

        $kriteria = [];
        foreach ($this->db->get('kriteria')->result() as $key => $value) {
            $kriteria[$value->id_kriteria] = $value;
        }

        $ternormalisasi = [];
        foreach ($normalisasi as $key => $value) {
            foreach ($value as $k => $v) {
                $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
            }
        }
        $data['ternormalisasi'] = $ternormalisasi;

        //  echo '<pre>';
        //  var_dump($ternormalisasi);
        // die();


        $max = [];
        $min = [];
        $tabel_yi = [];
        foreach ($ternormalisasi as $key => $value) {
            $res = 0;
            $res2 = 0;
            foreach ($value as $a => $b) {
                if ($kriteria[$a]->tipe == 1) {
                    // $new_only_benefit[$a] = $b ;
                    $res += $b;
                } else {
                    $res -= 0;
                }
                if ($kriteria[$a]->tipe == 0) {
                    // $new_only_benefit[$a] = $b ;
                    $res2 += $b;
                } else {
                    $res2 -= 0;
                }
            }
            $max[$key] = $res;
            $min[$key] = $res2;
            $tabel_yi[$key] = $res - $res2;
        }
        $data['max'] = $max;
        $data['min'] = $min;
        $data['tabel_yi'] = $tabel_yi;


        // echo '<pre>';
        // var_dump($tabel_yi);
        // die();
        $rankings = array_unique($tabel_yi);
        rsort($rankings);

        $result_data = [];
        $i = 1;
        foreach ($rankings as $key => $value) {
            $result_data["" . $value] = $i;
            $i++;
        }


        $text_rank = [];
        foreach ($tabel_yi as $key => $value) {
            $rank = $result_data["" . $value];
            $warga[$key]['value'] = $value;
            $warga[$key]['rank'] = $rank;
            $text_rank[] = $warga[$key];
        }

        function compareOrder1($a, $b)
        {
            return ($a['rank'] > $b['rank'] ? true : false);
        }
        usort($text_rank, 'compareOrder1');
        $data['sorted_rank_data'] = $text_rank;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/filter', $data);
        $this->load->view('template/footer', $data);
    }


    public function view_data($id_job)
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Perhitungan Ranking Berdasarkan Posisi";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_posisi->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_posisi->get_kriteria_by_id();
        $data['nilai'] = $this->m_posisi->get_all_nilai();

        $data['lihat'] = $this->m_posisi->lihat_data($id_job);


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('moora/filter_new', $data);
        $this->load->view('template/footer', $data);
    }


    public function posisi_teller()
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Posisi Teller";

        $data['job'] = $this->m_alternatif->view_job();


        $data['calon_teller'] = $this->db->query('SELECT * FROM set_peringkat
         JOIN akun_calon_pegawai ON set_peringkat.id_akun_calon_pegawai=akun_calon_pegawai.id_akun_calon_pegawai
         WHERE id_job=1 ORDER BY nilai_optimasi DESC ')->result();

        $data['alternatif'] = $this->m_teller->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_teller->get_kriteria_by_id();
        $data['nilai'] = $this->m_teller->get_all_nilai(); {

            $alternatif = [];
            foreach ($this->db->get('penilaian_teller')->result_array() as $key => $value) {
                $alternatif[$value['id_akun_calon_pegawai']] = $value;
            }

            // echo '<pre>';
            // var_dump($warga);
            // die();
            $tranpose = [];
            foreach ($this->db->get('penilaian_teller')->result() as $key => $value) {
                $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
            }
            $data['nilai_cp'] = $tranpose;
            // echo '<pre>';
            // var_dump($tranpose);
            // die();
            $sqrt   = [];
            foreach ($tranpose as $key => $value) {
                $sum = 0;
                foreach ($value as $k => $v) {
                    $sum += pow($v, 2);
                }
                $sqrt[$key] = sqrt($sum);
            }
            $data['sqrt'] = $sqrt;
            // echo '<pre>';
            // var_dump($sqrt);
            // die();
            $normalisasi = [];
            foreach ($tranpose as $key => $value) {
                foreach ($value as $k => $v) {
                    $normalisasi[$key][$k] = $v / $sqrt[$key];
                }
            }
            $data['normalisasi'] = $normalisasi;

            // echo '<pre>';
            // var_dump($normalisasi);
            // die();

            $kriteria = [];
            foreach ($this->db->get('kriteria')->result() as $key => $value) {
                $kriteria[$value->id_kriteria] = $value;
            }

            $ternormalisasi = [];
            foreach ($normalisasi as $key => $value) {
                foreach ($value as $k => $v) {
                    $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
                }
            }
            $data['ternormalisasi'] = $ternormalisasi;

            //  echo '<pre>';
            //  var_dump($ternormalisasi);
            // die();


            $max = [];
            $min = [];
            $tabel_yi = [];
            foreach ($ternormalisasi as $key => $value) {
                $res = 0;
                $res2 = 0;
                foreach ($value as $a => $b) {
                    if ($kriteria[$a]->tipe == 1) {
                        // $new_only_benefit[$a] = $b ;
                        $res += $b;
                    } else {
                        $res -= 0;
                    }
                    if ($kriteria[$a]->tipe == 0) {
                        // $new_only_benefit[$a] = $b ;
                        $res2 += $b;
                    } else {
                        $res2 -= 0;
                    }
                }
                $max[$key] = $res;
                $min[$key] = $res2;
                $tabel_yi[$key] = $res - $res2;
            }
            $data['max'] = $max;
            $data['min'] = $min;
            $data['tabel_yi'] = $tabel_yi;

            // echo '<pre>';
            // var_dump($tabel_yi);
            // die();

            $rankings = array_unique($tabel_yi);
            rsort($rankings);

            $result_data = [];
            $i = 1;
            foreach ($rankings as $key => $value) {
                $result_data["" . $value] = $i;
                $i++;
            }

            $text_rank = [];
            foreach ($tabel_yi as $key => $value) {
                $rank = $result_data["" . $value];
                $pegawai[$key]['value'] = $value;
                $pegawai[$key]['rank'] = $rank;
                $text_rank[] = $pegawai[$key];
            }

            function compareOrderTel($a, $b)
            {
                return ($a['rank'] > $b['rank'] ? true : false);
            }
            usort($text_rank, 'compareOrderTel');
            $data['sorted_rank_data'] = $text_rank;

            $data['jumlah_terima'] = $this->db->query("SELECT * FROM jumlah_diterima WHERE id_job='1' ")->result();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('posisi/teller', $data);
            $this->load->view('template/footer', $data);
        }
    }

    public function delete_nilai_teller($id_akun_calon_pegawai)
    {
        $this->m_app->hapus_teller($id_akun_calon_pegawai);
        $this->session->set_flashdata('sukses', 'Data Pengguna berhasil dihapus.');
        redirect(base_url('pengguna'));
    }


    public function posisi_hrd()
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Posisi Staf HRD";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_hrd->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_hrd->get_kriteria_by_id();
        $data['nilai'] = $this->m_hrd->get_all_nilai(); {

            $alternatif = [];
            foreach ($this->db->get('penilaian_hrd')->result_array() as $key => $value) {
                $alternatif[$value['id_akun_calon_pegawai']] = $value;
            }

            // echo '<pre>';
            // var_dump($warga);
            // die();
            $tranpose = [];
            foreach ($this->db->get('penilaian_hrd')->result() as $key => $value) {
                $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
            }
            $data['nilai_cp'] = $tranpose;
            // echo '<pre>';
            // var_dump($tranpose);
            // die();
            $sqrt   = [];
            foreach ($tranpose as $key => $value) {
                $sum = 0;
                foreach ($value as $k => $v) {
                    $sum += pow($v, 2);
                }
                $sqrt[$key] = sqrt($sum);
            }
            $data['sqrt'] = $sqrt;
            // echo '<pre>';
            // var_dump($sqrt);
            // die();
            $normalisasi = [];
            foreach ($tranpose as $key => $value) {
                foreach ($value as $k => $v) {
                    $normalisasi[$key][$k] = $v / $sqrt[$key];
                }
            }
            $data['normalisasi'] = $normalisasi;

            // echo '<pre>';
            // var_dump($normalisasi);
            // die();

            $kriteria = [];
            foreach ($this->db->get('kriteria')->result() as $key => $value) {
                $kriteria[$value->id_kriteria] = $value;
            }

            $ternormalisasi = [];
            foreach ($normalisasi as $key => $value) {
                foreach ($value as $k => $v) {
                    $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
                }
            }
            $data['ternormalisasi'] = $ternormalisasi;

            //  echo '<pre>';
            //  var_dump($ternormalisasi);
            // die();


            $max = [];
            $min = [];
            $tabel_yi = [];
            foreach ($ternormalisasi as $key => $value) {
                $res = 0;
                $res2 = 0;
                foreach ($value as $a => $b) {
                    if ($kriteria[$a]->tipe == 1) {
                        // $new_only_benefit[$a] = $b ;
                        $res += $b;
                    } else {
                        $res -= 0;
                    }
                    if ($kriteria[$a]->tipe == 0) {
                        // $new_only_benefit[$a] = $b ;
                        $res2 += $b;
                    } else {
                        $res2 -= 0;
                    }
                }
                $max[$key] = $res;
                $min[$key] = $res2;
                $tabel_yi[$key] = $res - $res2;
            }
            $data['max'] = $max;
            $data['min'] = $min;
            $data['tabel_yi'] = $tabel_yi;


            // echo '<pre>';
            // var_dump($tabel_yi);
            // die();

            $rankings = array_unique($tabel_yi);
            rsort($rankings);

            $result_data = [];
            $i = 1;
            foreach ($rankings as $key => $value) {
                $result_data["" . $value] = $i;
                $i++;
            }


            $text_rank = [];
            foreach ($tabel_yi as $key => $value) {
                $rank = $result_data["" . $value];
                $pegawai[$key]['value'] = $value;
                $pegawai[$key]['rank'] = $rank;
                $text_rank[] = $pegawai[$key];
            }

            function compareOrderHrd($a, $b)
            {
                return ($a['rank'] > $b['rank'] ? true : false);
            }
            usort($text_rank, 'compareOrderHrd');
            $data['sorted_rank_data'] = $text_rank;

            $data['jumlah_terima'] = $this->db->query("SELECT * FROM jumlah_diterima WHERE id_job='2' ")->result();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('posisi/hrd', $data);
            $this->load->view('template/footer', $data);
        }
    }



    public function posisi_branch_manager()
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Posisi Branch Manager";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_manager->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_manager->get_kriteria_by_id();
        $data['nilai'] = $this->m_manager->get_all_nilai(); {

            $alternatif = [];
            foreach ($this->db->get('penilaian_bmanager')->result_array() as $key => $value) {
                $alternatif[$value['id_akun_calon_pegawai']] = $value;
            }

            // echo '<pre>';
            // var_dump($warga);
            // die();
            $tranpose = [];
            foreach ($this->db->get('penilaian_bmanager')->result() as $key => $value) {
                $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
            }
            $data['nilai_cp'] = $tranpose;
            // echo '<pre>';
            // var_dump($tranpose);
            // die();
            $sqrt   = [];
            foreach ($tranpose as $key => $value) {
                $sum = 0;
                foreach ($value as $k => $v) {
                    $sum += pow($v, 2);
                }
                $sqrt[$key] = sqrt($sum);
            }
            $data['sqrt'] = $sqrt;
            // echo '<pre>';
            // var_dump($sqrt);
            // die();
            $normalisasi = [];
            foreach ($tranpose as $key => $value) {
                foreach ($value as $k => $v) {
                    $normalisasi[$key][$k] = $v / $sqrt[$key];
                }
            }
            $data['normalisasi'] = $normalisasi;

            // echo '<pre>';
            // var_dump($normalisasi);
            // die();

            $kriteria = [];
            foreach ($this->db->get('kriteria')->result() as $key => $value) {
                $kriteria[$value->id_kriteria] = $value;
            }

            $ternormalisasi = [];
            foreach ($normalisasi as $key => $value) {
                foreach ($value as $k => $v) {
                    $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
                }
            }
            $data['ternormalisasi'] = $ternormalisasi;

            //  echo '<pre>';
            //  var_dump($ternormalisasi);
            // die();


            $max = [];
            $min = [];
            $tabel_yi = [];
            foreach ($ternormalisasi as $key => $value) {
                $res = 0;
                $res2 = 0;
                foreach ($value as $a => $b) {
                    if ($kriteria[$a]->tipe == 1) {
                        // $new_only_benefit[$a] = $b ;
                        $res += $b;
                    } else {
                        $res -= 0;
                    }
                    if ($kriteria[$a]->tipe == 0) {
                        // $new_only_benefit[$a] = $b ;
                        $res2 += $b;
                    } else {
                        $res2 -= 0;
                    }
                }
                $max[$key] = $res;
                $min[$key] = $res2;
                $tabel_yi[$key] = $res - $res2;
            }
            $data['max'] = $max;
            $data['min'] = $min;
            $data['tabel_yi'] = $tabel_yi;


            // echo '<pre>';
            // var_dump($tabel_yi);
            // die();

            $rankings = array_unique($tabel_yi);
            rsort($rankings);

            $result_data = [];
            $i = 1;
            foreach ($rankings as $key => $value) {
                $result_data["" . $value] = $i;
                $i++;
            }


            $text_rank = [];
            foreach ($tabel_yi as $key => $value) {
                $rank = $result_data["" . $value];
                $pegawai[$key]['value'] = $value;
                $pegawai[$key]['rank'] = $rank;
                $text_rank[] = $pegawai[$key];
            }

            function compareOrderBmanager($a, $b)
            {
                return ($a['rank'] > $b['rank'] ? true : false);
            }
            usort($text_rank, 'compareOrderBmanager');
            $data['sorted_rank_data'] = $text_rank;

            $data['jumlah_terima'] = $this->db->query("SELECT * FROM jumlah_diterima WHERE id_job='3' ")->result();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('posisi/manager', $data);
            $this->load->view('template/footer', $data);
        }
    }


    public function posisi_customer_service()
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Posisi Customer Service";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_cs->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_cs->get_kriteria_by_id();
        $data['nilai'] = $this->m_cs->get_all_nilai(); {

            $alternatif = [];
            foreach ($this->db->get('penilaian_cs')->result_array() as $key => $value) {
                $alternatif[$value['id_akun_calon_pegawai']] = $value;
            }

            // echo '<pre>';
            // var_dump($warga);
            // die();
            $tranpose = [];
            foreach ($this->db->get('penilaian_cs')->result() as $key => $value) {
                $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
            }
            $data['nilai_cp'] = $tranpose;
            // echo '<pre>';
            // var_dump($tranpose);
            // die();
            $sqrt   = [];
            foreach ($tranpose as $key => $value) {
                $sum = 0;
                foreach ($value as $k => $v) {
                    $sum += pow($v, 2);
                }
                $sqrt[$key] = sqrt($sum);
            }
            $data['sqrt'] = $sqrt;
            // echo '<pre>';
            // var_dump($sqrt);
            // die();
            $normalisasi = [];
            foreach ($tranpose as $key => $value) {
                foreach ($value as $k => $v) {
                    $normalisasi[$key][$k] = $v / $sqrt[$key];
                }
            }
            $data['normalisasi'] = $normalisasi;

            // echo '<pre>';
            // var_dump($normalisasi);
            // die();

            $kriteria = [];
            foreach ($this->db->get('kriteria')->result() as $key => $value) {
                $kriteria[$value->id_kriteria] = $value;
            }

            $ternormalisasi = [];
            foreach ($normalisasi as $key => $value) {
                foreach ($value as $k => $v) {
                    $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
                }
            }
            $data['ternormalisasi'] = $ternormalisasi;

            //  echo '<pre>';
            //  var_dump($ternormalisasi);
            // die();


            $max = [];
            $min = [];
            $tabel_yi = [];
            foreach ($ternormalisasi as $key => $value) {
                $res = 0;
                $res2 = 0;
                foreach ($value as $a => $b) {
                    if ($kriteria[$a]->tipe == 1) {
                        // $new_only_benefit[$a] = $b ;
                        $res += $b;
                    } else {
                        $res -= 0;
                    }
                    if ($kriteria[$a]->tipe == 0) {
                        // $new_only_benefit[$a] = $b ;
                        $res2 += $b;
                    } else {
                        $res2 -= 0;
                    }
                }
                $max[$key] = $res;
                $min[$key] = $res2;
                $tabel_yi[$key] = $res - $res2;
            }
            $data['max'] = $max;
            $data['min'] = $min;
            $data['tabel_yi'] = $tabel_yi;


            // echo '<pre>';
            // var_dump($tabel_yi);
            // die();

            $rankings = array_unique($tabel_yi);
            rsort($rankings);

            $result_data = [];
            $i = 1;
            foreach ($rankings as $key => $value) {
                $result_data["" . $value] = $i;
                $i++;
            }


            $text_rank = [];
            foreach ($tabel_yi as $key => $value) {
                $rank = $result_data["" . $value];
                $pegawai[$key]['value'] = $value;
                $pegawai[$key]['rank'] = $rank;
                $text_rank[] = $pegawai[$key];
            }

            function compareOrderCs($a, $b)
            {
                return ($a['rank'] > $b['rank'] ? true : false);
            }
            usort($text_rank, 'compareOrderCs');
            $data['sorted_rank_data'] = $text_rank;

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('posisi/cs', $data);
            $this->load->view('template/footer', $data);
        }
    }


    public function posisi_public_relationship()
    {

        $data['title'] = "Perhitungan Ranking : Assesment Calon Pegawai BANK BTPN KC Makassar";
        $data['title1'] = "Posisi Public Relationship";

        $data['job'] = $this->m_alternatif->view_job();

        $data['alternatif'] = $this->m_public->get_nilai_setiap_alternatif();
        $data['kriteria'] = $this->m_public->get_kriteria_by_id();
        $data['nilai'] = $this->m_public->get_all_nilai(); {

            $alternatif = [];
            foreach ($this->db->get('penilaian_public')->result_array() as $key => $value) {
                $alternatif[$value['id_akun_calon_pegawai']] = $value;
            }

            // echo '<pre>';
            // var_dump($warga);
            // die();
            $tranpose = [];
            foreach ($this->db->get('penilaian_public')->result() as $key => $value) {
                $tranpose[$value->id_kriteria][$value->id_akun_calon_pegawai] = $value->total_nilai;
            }
            $data['nilai_cp'] = $tranpose;
            // echo '<pre>';
            // var_dump($tranpose);
            // die();
            $sqrt   = [];
            foreach ($tranpose as $key => $value) {
                $sum = 0;
                foreach ($value as $k => $v) {
                    $sum += pow($v, 2);
                }
                $sqrt[$key] = sqrt($sum);
            }
            $data['sqrt'] = $sqrt;
            // echo '<pre>';
            // var_dump($sqrt);
            // die();
            $normalisasi = [];
            foreach ($tranpose as $key => $value) {
                foreach ($value as $k => $v) {
                    $normalisasi[$key][$k] = $v / $sqrt[$key];
                }
            }
            $data['normalisasi'] = $normalisasi;

            // echo '<pre>';
            // var_dump($normalisasi);
            // die();

            $kriteria = [];
            foreach ($this->db->get('kriteria')->result() as $key => $value) {
                $kriteria[$value->id_kriteria] = $value;
            }

            $ternormalisasi = [];
            foreach ($normalisasi as $key => $value) {
                foreach ($value as $k => $v) {
                    $ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
                }
            }
            $data['ternormalisasi'] = $ternormalisasi;

            //  echo '<pre>';
            //  var_dump($ternormalisasi);
            // die();


            $max = [];
            $min = [];
            $tabel_yi = [];
            foreach ($ternormalisasi as $key => $value) {
                $res = 0;
                $res2 = 0;
                foreach ($value as $a => $b) {
                    if ($kriteria[$a]->tipe == 1) {
                        // $new_only_benefit[$a] = $b ;
                        $res += $b;
                    } else {
                        $res -= 0;
                    }
                    if ($kriteria[$a]->tipe == 0) {
                        // $new_only_benefit[$a] = $b ;
                        $res2 += $b;
                    } else {
                        $res2 -= 0;
                    }
                }
                $max[$key] = $res;
                $min[$key] = $res2;
                $tabel_yi[$key] = $res - $res2;
            }
            $data['max'] = $max;
            $data['min'] = $min;
            $data['tabel_yi'] = $tabel_yi;


            // echo '<pre>';
            // var_dump($tabel_yi);
            // die();

            $rankings = array_unique($tabel_yi);
            rsort($rankings);

            $result_data = [];
            $i = 1;
            foreach ($rankings as $key => $value) {
                $result_data["" . $value] = $i;
                $i++;
            }


            $text_rank = [];
            foreach ($tabel_yi as $key => $value) {
                $rank = $result_data["" . $value];
                $pegawai[$key]['value'] = $value;
                $pegawai[$key]['rank'] = $rank;
                $text_rank[] = $pegawai[$key];
            }

            function compareOrderPublic($a, $b)
            {
                return ($a['rank'] > $b['rank'] ? true : false);
            }
            usort($text_rank, 'compareOrderPublic');
            $data['sorted_rank_data'] = $text_rank;

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('posisi/public', $data);
            $this->load->view('template/footer', $data);
        }
    }



    function kirim_pesan()
    {
        $id_akun_calon_pegawai = $this->input->post('id_akun_calon_pegawai');
        $pesan = $this->input->post('pesan');
        $status = $this->input->post('status');


        $data = array(
            'id_akun_calon_pegawai' => $id_akun_calon_pegawai,
            'pesan' => $pesan,
            'status' => $status,

        );

        $this->m_teller->input_data($data, 'kotak_masuk');
        $this->session->set_flashdata('sukses', 'Pesan berhasil dikirim');
        redirect(base_url('perhitungan_moora/posisi_teller'));
    }
}

/* End of file Alternatif.php */
