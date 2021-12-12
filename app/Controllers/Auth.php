<?php
namespace App\Controllers;

use App\Models\UserData;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $req;
    private $db;
    private $userData;
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
        $data = [
            'email' => $this->req->getPost('email'),
            'username' => $this->req->getPost('username'),
            'password' => $this->req->getPost('password'),
            'nama' => $this->req->getPost('name'),
            'alamat' => $this->req->getPost('alamat'),
            'no_tlvn' => $this->req->getPost('phoneNumber')
        ];
        if ($this->userData->insert($data)) {
            return redirect()->to('/');
        }

        return redirect()->to('/register');
    }

    public function userLogin()
    {
        if (!is_null($this->session->get('username'))) {
            return redirect()->to('/');
        }
        $username = $this->req->getPost('username');
        $password = $this->req->getPost('password');
        $user = $this->userData->where([
            'username' => $username,
            'password' => $password
        ])->get()->getResult();
        if ($user) {
            $loginData = [
                'username' => $username,
                'id' => $user[0]->id_user
            ];
            $this->session->set($loginData);
            return redirect()->to('/');
        }
        return redirect()->to('login');
    }

    public function userLogout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function account(){
        if (is_null($this->session->get('username'))) {
            return redirect()->to('/');
        }
        $user = $this->userData->where([
            'username' => $this->session->get('username')
        ])->get()->getResult();
        return view('user/account', ['data' => $user]);
    }

}
