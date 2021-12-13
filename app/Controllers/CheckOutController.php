<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CheckOutController extends Controller
{
    private $session;
    private $db;
    private $id;
    private $req;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $id = $this->session->get('id');

        if(is_null($id)){
            return view('user/index');
        }

        $this->db = \Config\Database::connect();
        $this->req = \Config\Services::request();

    }

    public function index()
    {
        $transactionData = $this->db->table('data_penjualan')->where([
            'id_user' => $this->id
        ])->get();

        if(is_null($transactionData->id)){
            return view('/');
        }
        
        return view("user/about", [
            'transaction', $transactionData,
            'id', $this->id
        ]);
    }

    public function finish()
    {
        if($this->db->table('data_penjualan')->where([
            'id_user' => $this->id
        ])->delete()){
            return view('index');
        }
    }

    public function add()
    {
        if($this->db->table('data_penjualan')->where([
            'status' => "0",
            'id_user' => $this->session->get('id')
        ])){
            return redirect()->to('cart');
        }
        $id = $this->session->get('id');
        $items = $this->req->getPost('bnykBarang');
        $data = [
            'id_penjualan' => null,
            'id_user' => $id,
            'jumlah_barang' => $items,
            'harga_barang' => $this->req->getPost('totalBiaya'),
            'tanggal_terjual' => now(),
            'status' => '0',
            'tanggal_bayar' => null
        ];
        $insert = $this->db->table('data_penjualan')->insert($data);
        $transactionId = $this->db->table('data_penjualan')->where([
            'id_user' => $id,
            'status' => '0' 
        ])->get()->getResult()[0]->id_penjualan;
        if($insert){
            $this->db->table('data_cart_user')->delete([
                'id_user' => $id
            ]);
            foreach ($items as $key => $value) {
                $dataDet = [
                    'id_det_penjualan' => null,
                    'id_penjualan' => $transactionId,
                    'id_barang' => $this->req->getPost('idItem')[$key],
                    'jumlah_bayar' => $this->req->getPost('totalSemuaBarang')[$key]
                ];
                $this->db->table('data_det_penjualan')->insert($dataDet);
            }
            return redirect()->to('check-out');
        }
        return redirect()->to('cart');
    }

}
