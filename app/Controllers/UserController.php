<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        $data = array(
            'userData' => $db->table("data_user")->get()->getResult(),
            'heading' => 'My Heading',
            'message' => 'My Message'
        );
        // echo "data : " . $data[0]->id_user;
        return view("user/index", $data);
    }
}
