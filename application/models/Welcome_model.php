<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    function get_cetak_matkul($id, $smt)
    {
        return $this->db->query("SELECT a.*, b.nama as mahasiswa FROM tbl_matkul AS a JOIN tbl_users AS b ON a.id_user = b.id WHERE a.id_user = '$id' AND a.semester = '$smt' ORDER BY a.id DESC");
    }

    function get_matkul()
    {
        return $this->db->query("SELECT a.*, b.nama as mahasiswa FROM tbl_matkul AS a JOIN tbl_users AS b ON a.id_user = b.id ORDER BY a.id DESC")->result();
    }
}