<?php

class Databarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('databarangmodel', 'dbm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['databarang'] = $this->dbm->getAllBarang();
       
        $this->load->view('templates/header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required');
        $this->form_validation->set_rules('kodebarang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang', 'Jumlah Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dbm->tambahDataBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('databarang');
        }
    }

    public function hapus($id_barang)
    {
        $this->dbm->hapusDataBarang($id_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('databarang');
    }

    public function detail($id_barang)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['databarang'] = $this->dbm->getBarangById($id_barang);
        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_barang)
    {
        $data['judul'] = 'Form Ubah Data Barang';
        $data['databarang'] = $this->dbm->getBarangById($id_barang);
       
        $this->form_validation->set_rules('kodebarang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang', 'Jumlah Barang', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->dbm->ubahDataBarang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('databarang');
        }
    }

}
