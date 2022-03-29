<?php

namespace App\Controllers;

use App\Controller;

class Rubric extends Controller
{
    protected function handle(): void
    {

        $this->view['rubric'] = \App\Models\Rubric::findOne('id', $_GET['id']);
        $this->view['title'] = 'Рубрика ' . $this->view->rubric->rubric_name;
        $this->view['mainTitle'] = 'Рубрика: ' . $this->view->rubric->rubric_name;
        $this->view['blogs'] = \App\Models\Blog::pivotFindByTagId($_GET['id']);

        echo $this->view->render(__DIR__ . '/../..' . '/Views/rubric.php');
    }
}
