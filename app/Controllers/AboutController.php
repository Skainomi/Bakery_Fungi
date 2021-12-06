<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AboutController extends Controller
{
    public $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view("user/about");
    }
}
