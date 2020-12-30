<?php 
use GuzzleHttp\Client;
class Databarangmodel extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/1718022-restserver/api/',
           
         ]);
    }


    public function getAllBarang()
    {
       
        $response = $this->_client->request('GET', 'databarang', [
            'query' => [
                'X-API-KEY' => '123456789'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getBarangById($id_barang)
    {
        $response = $this->_client->request('GET', 'databarang', [
            'query' => [
                'X-API-KEY' => '123456789',
                'id_barang' => $id_barang
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
  
    }


    public function tambahDataBarang()
    {
   
        $data = [
            'id_barang' =>$this->input->post('id_barang', true),
            'kodebarang' =>$this->input->post('kodebarang', true),
            'namabarang' =>$this->input->post('namabarang', true),
            'jumlahbarang' =>$this->input->post('jumlahbarang', true),
            'X-API-KEY' => '123456789'
        ];
        $response = $this->_client->request('POST', 'databarang', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataBarang($id_barang)
    {
        $response = $this->_client->request('DELETE', 'databarang', [
            'form_params' => [
                'id_barang' => $id_barang,
                'X-API-KEY' => '123456789'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

    public function ubahDataBarang()
    {
        $data = [
         
            'id_barang' =>$this->input->post('id_barang', true),
            'kodebarang' =>$this->input->post('kodebarang', true),
            'namabarang' =>$this->input->post('namabarang', true),
            'jumlahbarang' =>$this->input->post('jumlahbarang', true),
            'X-API-KEY' => '123456789'
        ];

        $response = $this->_client->request('PUT', 'databarang', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 


    }

  
}