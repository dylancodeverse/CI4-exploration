<?php

namespace App\Controllers\first;

use App\Controllers\BaseController ;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {

    }
}