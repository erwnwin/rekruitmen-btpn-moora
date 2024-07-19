<?php

function kode_kriteria()
{
    $ci = get_instance();
    $query = "SELECT max(kode_kriteria) as maxKode FROM kriteria";
    $data = $ci->db->query($query)->row_array();
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 2, 1);
    $noUrut++;
    $char = "C";
    $kodeBaru = $char . sprintf("%02s", $noUrut);
    return $kodeBaru;
}

function kode_alternatif()
{
    $ci = get_instance();
    $query = "SELECT max(kode_alternatif) as maxKode FROM alternatif_new";
    $data = $ci->db->query($query)->row_array();
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 2, 1);
    $noUrut++;
    $char = "A";
    $kodeBaru = $char . sprintf("%02s", $noUrut);
    return $kodeBaru;
}

function kode_urut()
{
    $ci = get_instance();
    $query = "SELECT max(id_kriteria) as maxKode FROM kriteria";
    $data = $ci->db->query($query)->row_array();
    $kode = $data['maxKode'];
    $noUrut = (int) substr($kode, 2, 1);
    $noUrut++;
    $kodeBaru = sprintf($noUrut);
    return $kodeBaru;
}
