<?php

namespace App\Controllers ;

use App\Models\UserModel;

class LoginController extends BaseController 
{

    protected $helpers = ['form'] ;

    public function index()
    {
        return view('login') ;

    }

    public function login()
    {
    }
    
}
