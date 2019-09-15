<?php

class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        // $query = $this->db->get('siswa');
        // return $query->result_array();

        return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama_siswa" => $this->input->post('nama_siswa'),
            "nis" => $this->input->post('nis'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin')
        ];

        $this->db->insert('siswa', $data);
    }
}
