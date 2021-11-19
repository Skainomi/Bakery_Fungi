<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class ItemController extends Controller
{
    public function index($id)
    {
        $db = \Config\Database::connect();
        $dataBarang = $db->table("data_barang")->where(['id_barang' => $id])->get()->getResult();
        $dataTipe = $db->table("data_tipe_barang")->where(['id_tipe_barang' => $dataBarang[0]->tipe_barang])->get()->getResult();
        $dataTambahanBarang = $db->table("data_tambahan_barang")->where(['id_barang' => $id])->get()->getResult();
        $data = array(
            'DataTipeBarang' => $dataTipe,
            'DataBarang' => $dataBarang,
            'DataTambahan' => $dataTambahanBarang,
            'IdBarang' => $id
        );
        return view("user/item", $data);
    }
}
