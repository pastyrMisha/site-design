<?php

namespace App\Controllers;

use App\Controller;

class SingleProject extends Controller
{
    protected function handle(): void
    {
        $this->view['project'] = \App\Models\Project::findOne('id', $_GET['id']);

        if (null === $this->view->project) {
            echo $this->view->error();
            exit();
        }

        $this->view['title'] = $this->view->project->title;
        $this->view['mainTitle'] = $this->view->project->title;
        $this->view['prevProject'] = \App\Models\Project::findNearest($this->view->project, 'prev');
        $this->view['nextProject'] = \App\Models\Project::findNearest($this->view->project, 'next');
        $this->view['projectCategories'] = \App\Models\Category::findByPostId($_GET['id']);

        echo $this->view->render(__DIR__ . '/../..' . '/Views/single-project.php');
    }
}