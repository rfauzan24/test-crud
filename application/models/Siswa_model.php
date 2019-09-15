<?php

class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        // $query = $this->db->get('siswa');
        // return $query->result_array();

        return $this->db->get('siswa')->result_array();
    }
}
