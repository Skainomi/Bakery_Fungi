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
        $db = \Config\Database::connect();
        $dataCart = $db->table("data_cart_user")
        ->where(['id_user' => $this->session->get('id')])
        ->get()->getResult();
        $dataBarang = [];
        foreach ($dataCart as $value) {
            array_push($dataBarang, 
            $db->table('data_barang')
            ->where(['id_barang' => $value->id_barang])
            ->get()->getResult());
        }
        $data = array(
            'data_cart' => $dataCart,
            'data_Barang_Cart' => $dataBarang,
            'is_login' => isset($_SESSION['username'])
        );
        return view("user/cart", $data);
    }
}
