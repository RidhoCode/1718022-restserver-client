<?php

class Datapenjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('datapenjualanmodel', 'dbm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Penjualan';
        $data['datapenjualan'] = $this->dbm->getAllPenjualan();
       
        $this->load->view('templates/header', $data);
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('id_penjualan', 'Id Penjualan', 'required');
        $this->form_validation->set_rules('kodeitem', 'Kode Item', 'required');
        $this->form_validation->set_rules('namaitem', 'Nama Item', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jumlahbarang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('totalpendapatan', 'Total Pendapatam', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('penjualan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dbm->tambahDataPenjualan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('datapenjualan');
        }
    }

    public function hapus($id_penjualan)
    {
        $this->dbm->hapusDataPenjualan($id_penjualan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('datapenjualan');
    }

    public function detail($id_penjualan)
    {
        $data['judul'] = 'Detail Data Penjualan';
        $data['datapenjualan'] = $this->dbm->getPenjualanById($id_penjualan);
        $this->load->view('templates/header', $data);
        $this->load->view('penjualan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_penjualan)
    {
        $data['judul'] = 'Form Ubah Data Penjualan';
        $data['datapenjualan'] = $this->dbm->getPenjualanById($id_penjualan);

        $this->form_validation->set_rules('kodeitem', 'Kode Item', 'required');
        $this->form_validation->set_rules('namaitem', 'Nama Item', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jumlahbarang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('totalpendapatan', 'Total Pendapatam', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('penjualan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->dbm->ubahDataPenjualan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('datapenjualan');
        }
    }

}
