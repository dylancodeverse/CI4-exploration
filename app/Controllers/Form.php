<?php

namespace App\Controllers;

use Config\Services;

class Form extends BaseController
{
    // afaka atao ao amn BaseController avy hatrany
    protected $helpers = ['form'];

    public function index()
    {
        // mijery ve hoe post le requete (milay kosa)
        if (! $this->request->is('post')) {
            return view( APPPATH.'Views/form/signup');

        }

        $rules = [];

        if (! $this->validate($rules)) {
            return view( APPPATH.'Views/form/signup');
        }

        return view('success');
    }
}