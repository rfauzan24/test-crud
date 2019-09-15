<?php

class Guru_model extends CI_Model
{
    public function getAllGuru()
    {
        // $query = $this->db->get('guru');
        // return $query->result_array();

        return $this->db->get('guru')->result_array();
    }

    public function tambahDataGuru()
    {
        $data = [
            "nama_guru" => $this->input->post('nama_guru'),
            "nip" => $this->input->post('nip'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin')
        ];

        $this->db->insert('guru', $data);
    }

    public function hapusDataGuru($id_guru)
    {
        // $this->db->where('id_guru', $id_guru);
        $this->db->delete('guru', ['id_guru' => $id_guru]);
    }

    public function getGuruById($id_guru)
    {
        return $this->db->get_where('guru', ['id_guru' => $id_guru])->row_array();
    }

    public function ubahDataGuru()
    {
        $data = [
            "nama_guru" => $this->input->post('nama_guru', true),
            "nip" => $this->input->post('nip', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
        ];
        $this->db->where('id_guru', $this->input->post('id_guru'));
        $this->db->update('guru', $data);
    }
    public function cariDataGuru()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_guru', $keyword);
        $this->db->or_like('nip', $keyword);
        // $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('guru')->result_array();
    }
}
