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
            redirect('siswa');
        }
    }
}
