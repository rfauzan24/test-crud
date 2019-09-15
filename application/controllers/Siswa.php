<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['judul'] = 'Daftar Siswa';
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Data Tambah Siswa';

        $this->form_validation->set_rules('nama_siswa', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function hapus($id_siswa)
    {
        $this->Siswa_model->hapusDataSiswa($id_siswa);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }

    public function detail($id_siswa)
    {
        $data['judul'] = 'Detail Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id_siswa);
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id_siswa)
    {
        $data['judul'] = 'Form Ubah Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id_siswa);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
        $this->form_validation->set_rules('nama_siswa', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->ubahDataSiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('siswa');
        }
    }
}
