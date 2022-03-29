<?php

namespace App\Controllers;

use App\Controller;

class Blog extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'Блог';
        $this->view['mainTitle'] = 'Блог';
        $this->view['blogs'] = \App\Models\Blog::findAll();

        echo $this->view->render(__DIR__ . '/../..' . '/Views/blog.php');
    }
}