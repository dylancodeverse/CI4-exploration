<?php

namespace App\Controllers ;

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
