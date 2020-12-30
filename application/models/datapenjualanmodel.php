<?php 
use GuzzleHttp\Client;
class Datapenjualanmodel extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/1718022-restserver/api/',
           
         ]);
    }


    public function getAllPenjualan()
    {
       
        $response = $this->_client->request('GET', 'datapenjualan', [
            'query' => [
                'X-API-KEY' => '123456789'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getPenjualanById($id_penjualan)
    {
        $response = $this->_client->request('GET', 'datapenjualan', [
            'query' => [
                'X-API-KEY' => '123456789',
                'id_penjualan' => $id_penjualan
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
    }


    public function tambahDataPenjualan()
    {
   
        $data = [
            'id_penjualan' =>$this->input->post('id_penjualan', true),
            'kodeitem' =>$this->input->post('kodeitem', true),
            'namaitem' =>$this->input->post('namaitem', true),
            'size' =>$this->input->post('size', true),
            'jenis' =>$this->input->post('jenis', true),
            'merk' =>$this->input->post('merk', true),
            'jumlahbarang' =>$this->input->post('jumlahbarang', true),
            'satuan' =>$this->input->post('satuan', true),
            'totalpendapatan' =>$this->input->post('totalpendapatan', true),
            'X-API-KEY' => '123456789'
        ];
        $response = $this->_client->request('POST', 'datapenjualan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataPenjualan($id_penjualan)
    {
        $response = $this->_client->request('DELETE', 'datapenjualan', [
            'form_params' => [
                'id_penjualan' => $id_penjualan,
                'X-API-KEY' => '123456789'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

    public function ubahDataPenjualan()
    {
        $data = [
         
            'kodeitem' =>$this->input->post('kodeitem', true),
            'namaitem' =>$this->input->post('namaitem', true),
            'size' =>$this->input->post('size', true),
            'jenis' =>$this->input->post('jenis', true),
            'merk' =>$this->input->post('merk', true),
            'jumlahbarang' =>$this->input->post('jumlahbarang', true),
            'satuan' =>$this->input->post('satuan', true),
            'totalpendapatan' =>$this->input->post('totalpendapatan', true),
            'X-API-KEY' => '123456789'
        ];

        $response = $this->_client->request('PUT', 'datapenjualan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 


    }

  
}