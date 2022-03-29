<?php

namespace App\Models;

use App\Db;
use App\Posts;

class Comment extends Posts
{
    public const TABLE = 'comments';

    public $nickname;
    public $mail;
    public $avatar;
    public $content;
    public $date;
    public $attachment;
}
