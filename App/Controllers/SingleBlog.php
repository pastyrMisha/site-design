<?php

namespace App\Controllers;

use App\Controller;
use App\Helper;

class SingleBlog extends Controller
{
    protected function handle(): void
    {
        $this->view['blog'] = \App\Models\Blog::findOne('id', $_GET['id']);

        if (null === $this->view->blog) {
            echo $this->view->error();
            exit();
        }

        $this->view['title'] = $this->view->blog->title;
        $this->view['mainTitle'] = $this->view->blog->title;
        $this->view['prevBlog'] = \App\Models\Blog::findNearest($this->view->blog, 'prev');
        $this->view['nextBlog'] = \App\Models\Blog::findNearest($this->view->blog, 'next');
        $this->view['blogRubrics'] = \App\Models\Rubric::findByPostId($_GET['id']);

        echo $this->view->render(__DIR__ . '/../..' . '/Views/single-blog.php');
    }
}