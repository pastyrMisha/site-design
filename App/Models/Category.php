<?php

namespace App\Models;

use App\Tag;

class Category extends Tag
{
    public const TABLE = 'categories';
    public const PIVOTTABLE = 'projects_categories';
    public const PIVOTROW = 'project_id';
    public const PIVOTROWTWO = 'cat_id';

    public $cat_name;
}