<?php

namespace App\Models;

use App\Tag;

class Rubric extends Tag
{
    public const TABLE = 'rubrics';
    public const PIVOTTABLE = 'blogs_rubrics';
    public const PIVOTROW = 'blog_id';
    public const PIVOTROWTWO = 'rubric_id';

    public $rubric_name;
}