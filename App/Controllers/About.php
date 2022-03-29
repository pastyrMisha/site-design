<?php

namespace App\Controllers;

use App\Controller;

class About extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'О дизайнере';
        $this->view['mainTitle'] = 'О дизайнере';
        $this->view['projects'] = \App\Models\Project::findAll();

        echo $this->view->render(__DIR__ . '/../..' . '/Views/about.php');
    }
}