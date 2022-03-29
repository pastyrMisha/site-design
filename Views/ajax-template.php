<?php
require_once __DIR__ . '/..' . '/App/autoload.php';

use \App\Helper;
use App\Models\Project;

$projects = Project::pivotFindByTagId($_GET['id']);
?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 projects">
<?php
foreach ($projects as $post) :
?>
    <div class="col project__card align-self-start ps-0 pe-0">
        <div class="card">
            <div class="card-body single-table">
                <a href="/single-project/?id=<?= $post->project_id ?>" class="stretched-link">
                    <img src="/assets/image/project/<?= $post->img_folder ?>/1.png" class="card-img-top"
                         alt="Проект <?= $post->project_id ?>">
                </a>
                <h5 class="card-title "><?= $post->title ?></h5>
                <p class="card-text"><?= Helper::getCutContent($post->content) ?></p>
            </div>
        </div>
    </div>
<?php
endforeach;
?>
</div>