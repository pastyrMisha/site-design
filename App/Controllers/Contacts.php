<?php

namespace App\Controllers;

use App\Controller;

class Contacts extends Controller
{
    protected function handle()
    {
        $this->view['title'] = 'Контакты';
        $this->view['mainTitle'] = 'Контакты';

        echo $this->view->render(__DIR__ . '/../..' . '/Views/contacts.php');
    }
}