<?php

namespace App\Controllers;

use App\Controller;

class PriceList extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'Прайс-лист';
        $this->view['mainTitle'] = 'Прайс-лист';
        $this->view['projects'] = \App\Models\Project::findAll();

        echo $this->view->render(__DIR__ . '/../..' . '/Views/price-list.php');
    }
}