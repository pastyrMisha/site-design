<?php

namespace App\Controllers;

use App\Controller;

class Category extends Controller
{
    protected function handle(): void
    {

        $this->view['category'] = \App\Models\Category::findOne('id', $_GET['id']);
        $this->view['title'] = 'Категория ' . $this->view->category->cat_name;
        $this->view['mainTitle'] = 'Категория: ' . $this->view->category->cat_name;

        echo $this->view->render(__DIR__ . '/../..' . '/Views/category.php');
    }
}