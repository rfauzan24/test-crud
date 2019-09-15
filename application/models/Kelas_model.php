<?php

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        // $query = $this->db->get('kelas');
        // return $query->result_array();

        return $this->db->get('kelas')->result_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas'),
        ];

        $this->db->insert('kelas', $data);
    }

    public function hapusDataKelas($id_kelas)
    {
        // $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas', ['id_kelas' => $id_kelas]);
    }

    public function getKelasById($id_kelas)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id_kelas])->row_array();
    }

    public function ubahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
        ];
        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $this->db->update('kelas', $data);
    }

    public function cariDataKelas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_kelas', $keyword);
        // $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('kelas')->result_array();
    }
}
