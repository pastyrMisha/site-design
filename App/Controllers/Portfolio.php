<?php

namespace App\Controllers;

use App\Controller;

class Portfolio extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'Портфолио';
        $this->view['mainTitle'] = 'Завершенные проекты';
        $this->view['projects'] = \App\Models\Project::findAll();
        $this->view['categories'] = \App\Models\Category::findAll();

        echo $this->view->render(__DIR__ . '/../..' . '/Views/portfolio.php');
    }
}