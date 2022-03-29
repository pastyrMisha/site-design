<?php

namespace App\Controllers;

use App\Controller;

class Index extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'Сайт графического дизайнера';
        $this->view['mainTitle'] = 'Сайт графического дизайнера';
        $this->view['projects'] = \App\Models\Project::findAll();

        echo $this->view->render(__DIR__ . '/../..' . '/Views/index.php');
    }
}