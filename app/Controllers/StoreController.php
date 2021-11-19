<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class StoreController extends Controller{

    public function index(){
        $db = \Config\Database::connect();
        $dataBarang = $db->table("data_barang")->get()->getResult();
        $dataTipeBarang = [];
        $dataTipe = $db->table("data_tipe_barang");

        foreach($dataBarang as $key){
            array_push($dataTipeBarang, $dataTipe->where(['id_tipe_barang' => $key->tipe_barang])->get()->getResult());
        }
        $data = array(
            'DataTipeBarang' => $dataTipe->get()->getResult(),
            'DataBarang' => $dataBarang,
            'DataSatuanTipeBarang' => (object) $dataTipeBarang
        );
        return view("user/store", $data);
    }

}