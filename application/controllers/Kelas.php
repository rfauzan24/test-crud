<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $data['judul'] = 'Daftar kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Data Tambah kelas';

        $this->form_validation->set_rules('nama_kelas', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->tambahDataKelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelas');
        }
    }

    public function hapus($id_kelas)
    {
        $this->Kelas_model->hapusDataKelas($id_kelas);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }

    public function detail($id_kelas)
    {
        $data['judul'] = 'Detail Data kelas';
        $data['kelas'] = $this->Kelas_model->getKelasById($id_kelas);
        $this->load->view('templates/header', $data);
        $this->load->view('kelas/detail', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id_kelas)
    {
        $data['judul'] = 'Form Ubah Data kelas';
        $data['kelas'] = $this->Kelas_model->getKelasById($id_kelas);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
        $this->form_validation->set_rules('nama_kelas', 'Nama', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->ubahDatakelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }
    }
}
