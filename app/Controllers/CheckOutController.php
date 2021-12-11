<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CheckOutController extends Controller
{
    public $session;
    public $db;
    public $id;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $id = $this->session->get('id');

        if(is_null($id)){
            return view('user/index');
        }

        $this->db = \Config\Database::connect();

    }

    public function index()
    {
        $transactionData = $this->db->table('data_penjualan')->where([
            'id_user' => $this->id
        ])->get();

        if(is_null($transactionData->id)){
            return view('index');
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

}
