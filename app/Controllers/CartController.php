<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CartController extends Controller
{
    public $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if(is_null($this->session->get('id'))){
            return redirect()->to('/store');
        }
        $db = \Config\Database::connect();
        $dataCart = $db->table("data_cart_user")
        ->where(['id_user' => $this->session->get('id')])
        ->get()->getResult();
        $dataBarang = [];
        foreach ($dataCart as $value) {
            array_push(
                $dataBarang,
                $db->table('data_barang')
            ->where(['id_barang' => $value->id_barang])
            ->get()->getResult()
            );
        }
        
        $hargaItem = [];
        $cartsItem = [];
        foreach ($dataBarang as $key => $value) {
            foreach ($value as $index => $val) {
                array_push($hargaItem, $val->harga_barang);
            }
        }

        foreach ($dataCart as $key => $value) {
            array_push($cartsItem, $value->bnyk_barang);
        }

        $data = array(
            'data_cart' => $dataCart,
            'data_Barang_Cart' => $dataBarang,
            'is_login' => isset($_SESSION['username']),
            'itemsPrice' => $hargaItem,
            'cartsItem' => $cartsItem
        );
        return view("user/cart", $data);
    }
}
