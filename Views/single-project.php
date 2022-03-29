<?php
use \App\Helper;
$images = Helper::scanDir(__DIR__ . '/..' . '/assets/image/project/' . $this->project->img_folder);
$countImages = Helper::countFiles(__DIR__ . '/..' . '/assets/image/project/' . $this->project->img_folder);
$cutUrl = Helper::getCutUrl($this->project->url);
?>

</div>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $this->mainTitle ?></li>
    </ol>
</nav>
<div class="container">
    <div class="content row">
        <div class="content__main col-12 col-md-9 col-xl-10">
    <div id="carouselExampleIndicators" class="carousel carousel-dark slide pb-5" data-bs-ride="carousel">

        <?php
        $i = 0;
        $j = 0;
        ?>

        <div class="carousel-indicators">
            <?php
            if ($countImages > 1) :
                while ($i < $countImages) :
                    ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>"
                            class=" <?= $i === 0 ? 'active' : '' ?>"
                            aria-current="true" aria-label="Slide <?= $i ?>"></button>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($images as $key => $image) : ?>


                <div class="carousel-item <?= $j === 0 ? 'active' : '' ?>">
                    <img src="/assets/image/project/<?= $this->project->img_folder ?>/<?= $image ?>" class="d-block w-100"
                         alt="<?= $this->project->id ?>">
                </div>
                <?php $j++; endforeach; ?>
        </div>
        <?php if ($countImages > 1) : ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        <?php endif; ?>
    </div>
        </div>
        <aside class="col-6 mx-auto col-md-3 col-xl-2 mt-4 mt-md-0 align-self-md-end">
            <div class="project__designer mb-3">
                <h5>Дизайнер</h5>
                <span>Анастасия Звендинова</span>
            </div>
            <div class="project__customer mb-3" style="<?= $this->project->url === null ? 'margin-bottom: 3rem!important;' : '' ?>">
                <h5>Заказчик</h5>
                <span><?= $this->project->customer ?></span>
            </div>
            <div class="project__url mb-5" style="<?= $this->project->url === null ? 'display: none;' : '' ?>">
                <h5>Сайт компании</h5>
                <a href="<?= $this->project->url ?>" target="_blank"><?= $cutUrl ?></a>
            </div>
            <div class="category__list mb-0 mb-md-5">
                <ul class="list-group border-0">
                    <li class="list-group-item fs-5 fw-bold">Категории</li>
                    <?php foreach ($this->projectCategories as $category) : ?>
                        <li class="list-group-item"><a href="/category/?id=<?= $category->id ?>"><?= $category->cat_name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </div>
        <div class="row mt-3">
            <h1 class="mt-5 mt-md-3 mb-4"><?= $this->project->title ?></h1>
            <p class="fs-4 mb-lg-5"><?= $this->project->content ?></p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <nav aria-label="to prev next project">
        <ul class="pagination mt-5 mx-sm-5">
            <li class="page-item me-auto <?= $this->prevProject->id === null ? 'disabled' : '' ?>" aria-current="page">
                <a class="page-link" href="/single-project/?id=<?= $this->prevProject->id ?? $this->project->id ?>">Предыдущий</a>
            </li>
            <li class="page-item ms-auto <?= $this->nextProject->id === null ? 'disabled' : '' ?>" aria-current="page">
                <a class="page-link" href="/single-project/?id=<?= $this->nextProject->id ?? $this->project->id ?>">Следующий</a>
            </li>
        </ul>
    </nav>
</div>
<div class="container">

