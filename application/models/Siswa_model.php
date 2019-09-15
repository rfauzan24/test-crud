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

    public function hapusDataSiswa($id_siswa)
    {
        // $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('siswa', ['id_siswa' => $id_siswa]);
    }

    public function getSiswaById($id_siswa)
    {
        return $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row_array();
    }

    public function ubahDataSiswa()
    {
        $data = [
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "nis" => $this->input->post('nis', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
        ];
        $this->db->where('id_siswa', $this->input->post('id_siswa'));
        $this->db->update('siswa', $data);
    }
    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('nis', $keyword);
        // $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('siswa')->result_array();
    }
}
