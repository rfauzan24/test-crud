<?php

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['guru'] = $this->Guru_model->getAllGuru();
        $data['judul'] = 'Daftar Guru';
        $this->load->view('templates/header', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Data Tambah Guru';

        $this->form_validation->set_rules('nama_guru', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->tambahDataGuru();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('guru');
        }
    }

    public function hapus($id_guru)
    {
        $this->Guru_model->hapusDataGuru($id_guru);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('guru');
    }

    public function detail($id_guru)
    {
        $data['judul'] = 'Detail Data guru';
        $data['guru'] = $this->Guru_model->getGuruById($id_guru);
        $this->load->view('templates/header', $data);
        $this->load->view('guru/detail', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id_guru)
    {
        $data['judul'] = 'Form Ubah Data Guru';
        $data['guru'] = $this->Guru_model->getGuruById($id_guru);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
        $this->form_validation->set_rules('nama_guru', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->ubahDataguru();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('guru');
        }
    }
}
