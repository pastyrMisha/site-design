<?php

namespace App\Controllers;

use App\Controller;

class Login extends Controller
{
    protected function handle()
    {
        if (null !== $_SESSION['user']) {
            require __DIR__ . '/../../admin/index.php';
            exit();
        }
        $this->view['title'] = 'Авторизация';
        $this->view['mainTitle'] = 'Авторизация';

        echo $this->view->render(__DIR__ . '/../..' . '/Views/login.php');
    }
}