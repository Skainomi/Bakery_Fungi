<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;

class Auth extends Controller
{
    protected $req;
    private $db;
    private $userData;
    private $adminData;
    public $session;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->userData = $this->db->table("data_user");
        $this->adminData = $this->db->table("data_pegawai");
        $this->req = \Config\Services::request();
        $this->session = \Config\Services::session();
    }

    public function userRegister()
    {
        $user = new \App\Entities\User();
        $user->email = $this->req->getPost('email');
        $user->username = $this->req->getPost('username');
        $user->password = $this->req->getPost('password');
        $user->nama = $this->req->getPost('nama');
        $user->alamat = $this->req->getPost('alamat');
        $user->no_tlvn = $this->req->getPost('no_tlvn');
        $userModel = new \App\Models\UserData();
        $userModel->insert($user);
        return view("user/item");
    }

    public function adminLogin()
    {
        return ;
    }

    public function userLogin()
    {
        $username = $this->req->getPost('username');
        $password = $this->req->getPost('password');
        $user = $this->userData->where([
            'username' => $username,
            'password' => $password
        ])->get()->getResult();
        if($user){
            $loginData = [
                'username' => $username
            ];
            $this->session->set($loginData);
            return view("user/item");
        }
        return view("user/item");
    }
}
