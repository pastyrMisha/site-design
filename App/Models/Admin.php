<?php

namespace App\Models;

use App\Posts;

class Admin extends Posts
{
    public const TABLE = 'users';

    public $user;
    public $password;
}