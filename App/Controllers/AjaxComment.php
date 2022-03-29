<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Comment as CommentModel;
use App\Upload;

class AjaxComment extends Controller
{
    protected function handle(): void
    {

        if (($_POST['tel'] === '') && isset($_POST['username'], $_POST['email'], $_POST['message'], $_POST['check']) && (trim($_POST['message']) !== "")) {

            if (($_FILES['avatar']['type'] !== 'image/jpeg' && $_FILES['avatar']['type'] !== 'image/png') && !empty($_FILES['avatar']['type'])) {
                $this->view['error'] = "Не правильный файл";
            } else if ($_FILES['avatar']['size'] > 1000000) {
                $this->view['error'] = "Превышен допустимый размер";
            } else {
                $upload = new Upload('avatar', 'avatar', 'log');
                $upload();

                $avatar = !empty($_FILES['avatar']) ? $_FILES['avatar']['name'] : null;

                $postArr = [
                    'nickname'   => $_POST['username'],
                    'mail'       => $_POST['email'],
                    'avatar'     => $avatar,
                    'content'    => $_POST['message'],
                    'attachment' => $_POST['blogId'],
                ];

                CommentModel::append($postArr);
            }
        }
        $this->view['comments'] = CommentModel::singleFindByTagId($_GET['id']);

        $this->view->display(__DIR__ . '/../..' . '/Views/ajax-comments.php');
    }
}