<?php
namespace App\Controllers ;
use App\Controllers\BaseController;

class Admin extends BaseController
{

    public function connect()
    {
        session()->set("isLoggedIn", true);

    }
    public function listuser()
    {

        echo "Rakoto" ;
    }

    public function dashboard()
    {
        echo "Dashboard";
    }

    public function disconnect()
    {
        session()->destroy();
    }

    public function index()
    {
        return view('form');
    }
}
