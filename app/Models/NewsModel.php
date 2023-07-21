<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';


/*
    With this code, you can perform two different queries. 
    You can get all news records, or get a news item by its slug. 
    You might have noticed that the $slug variable wasn’t escaped before running the query; 

    Query Builder does this for you.
*/ 

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }


    
}
