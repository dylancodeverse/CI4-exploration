<?php

namespace App\Controllers;
use App\Models\NewsModel;


class News extends BaseController
{
    public function index()
    {
        // the model() function is used to create the NewsModel instance
        // You could also write $model = model(NewsModel::class);

        $model = new NewsModel();

        $data['news'] = $model->getNews();
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);
    }


}
