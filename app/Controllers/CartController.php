<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CartController extends Controller
{
    private $session;
    private $req;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->req = \Config\Services::request();
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

    public function destroy()
    {
        $db = \Config\Database::connect();
        $db->table('data_cart_user')->delete([
            'id_cart' => $this->req->getPost('idCart')
        ]);
        return redirect()->to('cart');
    }

}
