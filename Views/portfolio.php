<?php
use \App\Helper;
?>

<h1 class="mt-5 mb-4"><?= $this->mainTitle ?></h1>
</div>
<div class="container-fluid">
<ul class="nav nav-tabs mb-4 justify-content-center" id="categoryTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab"
                aria-controls="all" aria-selected="true" data-category-number="0">ВСЕ КАТЕГОРИИ
        </button>
    </li>

    <?php
        foreach ($this->categories as $category) :
            $transCatName = Helper::translitId($category->cat_name);
    ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link category-tab <?= $transCatName ?>" id="<?= $transCatName ?>-tab" data-bs-toggle="tab"
                    data-bs-target="#<?= $transCatName ?>" type="button" role="tab" aria-controls="<?= $transCatName ?>"
                    aria-selected="false" data-category-number="<?= $category->id ?>"><?= $category->cat_name ?></button>
        </li>
    <?php
        endforeach;
    ?>


</ul>
</div>
<div class="container">
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 projects">
            <?php
            foreach ($this->projects as $project) :
                ?>
                <div class="col project__card align-self-start ps-0 pe-0 mt-1">
                    <div class="card">
                        <div class="card-body single-table">
                            <a href="/single-project/?id=<?= $project->id ?>" class="stretched-link">
                                <img src="/assets/image/project/<?= $project->img_folder ?>/1.png" class="card-img-top"
                                     alt="Проект <?= $project->id ?>">
                            </a>
                            <h5 class="card-title "><?= $project->title ?></h5>
                            <p class="card-text"><?= Helper::getCutContent($project->content) ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <?php
        foreach ($this->categories as $category) :
            $transCatName = Helper::translitId($category->cat_name);
            ?>
        <div class="tab-pane category-pane fade <?= $transCatName ?>" id="<?= $transCatName ?>" role="tabpanel"
             aria-labelledby="<?= $transCatName ?>-tab">
        </div>
    <?php
        endforeach;
    ?>
    <script src="/assets/js/loadProjects.js"></script>
</div>

