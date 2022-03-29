<?php

namespace App;

use App\Models\Project;

class Admin extends Controller
{
    protected function access(): bool
    {
        if (isset($_GET['exit'])) {
            session_destroy();
            return false;
        }
        if (null !== $_SESSION['user']) {
            return true;
        }
        if (isset($_POST['submit'], $_POST['login'], $_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $user = \App\Models\Admin::findOne('user', $login);

            if ($user && password_verify($password, $user->password)) {
                $_SESSION['user'] = $login;
                return true;
            }
        }
        return false;
    }

    protected function handle(): void
    {




        $username = Helper::mb_ucfirst($_SESSION['user']);

        $this->view['title'] = 'Добро пожаловать, ' . $username . '!';
        $this->view['mainTitle'] = 'Добро пожаловать, ' . $username . '!';
//        $this->view['projects'] = Project::findAll();
//
//        foreach ($this->view->projects as $project) {
//            $asideTable[] = \App\Models\Category::findByPostId($project->id);
//        }
//        $this->view['projectCategories'] = $asideTable;

        echo $this->view->render(__DIR__ . '/../Views/admin.php');
    }
}