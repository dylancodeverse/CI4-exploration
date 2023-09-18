<?php

namespace App\Models ;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'utilisateur';    

    protected $allowedFields = ['nom', 'email'];


    // raha ohatra ka tsy te hampiasa anle par defaut
    protected $DBGroup = 'test';



}
