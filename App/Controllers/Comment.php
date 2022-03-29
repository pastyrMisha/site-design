<?php

namespace App\Controllers;

use App\Controller;

class Comment extends Controller
{
    protected function handle(): void
    {
        $this->view['error'] = '';

        $this->view->display(__DIR__ . '/../..' . '/Views/comment.php');
    }
}