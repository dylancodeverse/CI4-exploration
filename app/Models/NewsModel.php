<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['title', 'slug', 'body'];

/*
    With this code, you can perform two different queries. 
    You can get all news records, or get a news item by its slug. 
    You might have noticed that the $slug variable wasn’t escaped before running the query; 

    Query Builder does this for you.


    The two methods used here, findAll() and first(), 
    are provided by the CodeIgniter\Model class. 
    They already know the table to use based on the $table property 
    we set in NewsModel class, earlier. They are helper methods that use 
    the Query Builder to run their commands on the current table, 
    and returning an array of results in the format of your choice. 
    In this example, findAll() returns an array of array.

*/ 

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }



}
