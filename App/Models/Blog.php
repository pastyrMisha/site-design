<?php

namespace App\Models;

use App\Posts;

class Blog extends Posts
{
    public const TABLE = 'blogs';
    public const PIVOTTABLE = 'blogs_rubrics';
    public const PIVOTROW = 'blog_id';
    public const PIVOTROWTWO = 'rubric_id';

    public $img_folder;
    public $title;
    public $content;
}