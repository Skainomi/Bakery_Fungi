<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class CheckOutController extends Controller
{
    private $session;
    private $db;
    public $id;
    private $req;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->id = $this->session->get('id');

        if(is_null($this->id)){
            return view('user/index');
        }

        $this->db = \Config\Database::connect();
        $this->req = \Config\Services::request();

    }

    public function index()
    {
        $transactionData = $this->db->table('data_penjualan')->where([
            'id_user' => $this->id,
            'status' => '0'
        ])->get()->getResult();

        if(is_null($transactionData)){
            return view('user/index');
        }
        return view("user/checkOut", [
            'transaction' => $transactionData,
            'id' => $this->id
        ]);
    }

    public function finish()
    {
        if($this->db->table('data_penjualan')->where([
            'id_user' => $this->id
        ])->update([
            'status' => '1'
        ])){
            return view('user/index');
        }
    }

    public function add()
    {
        if($this->db->table('data_penjualan')->where([
            'status' => "1",
            'id_user' => $this->session->get('id')
        ])->get()->getResult()){
            return redirect()->to('cart');
        }
        $id = $this->session->get('id');
        $items = $this->req->getPost('bnykBarang');

        $data = [
            'id_penjualan' => null,
            'id_user' => $id,
            'jumlah_barang' => $items,
            'harga_barang' => $this->req->getPost('totalBiaya'),
            'tanggal_terjual' => (string) new Time('now', 'Asia/Jakarta'),
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
            for ($i=0; $i < $items; $i++) { 
                $dataDet = [
                    'id_det_penjualan' => null,
                    'id_penjualan' => $transactionId,
                    'id_barang' => $this->req->getPost('idItem'.$i),
                    'jumlah_barang' => $this->req->getPost('itemCounterInput'.$i)
                ];
                $this->db->table('data_det_penjualan')->insert($dataDet);
            }
            return redirect()->to('check-out');
        }
        return redirect()->to('cart');
    }

}
