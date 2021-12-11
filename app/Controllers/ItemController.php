<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class ItemController extends Controller
{
    private $db;
    private $session;
    private $req;

    public function __construct()
    {
        $this->req = \Config\Services::request();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index($id)
    {
        $dataBarang = $this->db->table("data_barang")->where(['id_barang' => $id])->get()->getResult();
        $dataTipe = $this->db->table("data_tipe_barang")->where(['id_tipe_barang' => $dataBarang[0]->tipe_barang])->get()->getResult();
        $dataTambahanBarang = $this->db->table("data_tambahan_barang")->where(['id_barang' => $id])->get()->getResult();
        $data = array(
            'DataTipeBarang' => $dataTipe,
            'DataBarang' => $dataBarang,
            'DataTambahan' => $dataTambahanBarang,
            'IdBarang' => $id,
        );
        return view("user/item", $data);
        
    }

    public function add(){
        $builder = $this->db->table('data_cart_user');
        $data = [
            'id_user' => $this->session->get('id'),
            'id_barang' => $this->req->getPost('id_barang'),
            'bnyk_barang' => $this->req->getPost('bnyk_barang')
        ];
        if($builder->insert($data)){
            return redirect()->to('/cart-add');
        }

        return redirect()->to('/store');
        
    }

}
