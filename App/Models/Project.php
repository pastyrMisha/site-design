<?php

namespace App\Models;

use App\Posts;

class Project extends Posts
{
    public const TABLE = 'projects';
    public const PIVOTTABLE = 'projects_categories';
    public const PIVOTROW = 'project_id';
    public const PIVOTROWTWO = 'cat_id';

    public $img_folder;
    public $title;
    public $content;
}