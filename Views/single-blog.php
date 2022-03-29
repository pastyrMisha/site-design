<?php
use \App\Helper;
$cutUrl = Helper::getCutUrl($this->blog->url);
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
            <div>
                <img src="/assets/image/blogs/<?= $this->blog->img_folder ?>/1.jpeg" class="d-block w-100"
                     alt="<?= $this->blog->id ?>">
            </div>

        </div>

    <aside class="col-6 mx-auto col-md-3 col-xl-2 mt-4 mt-md-0 align-self-md-end">

        <div class="category__list mb-0 mb-md-5">
            <ul class="list-group border-0">
                <li class="list-group-item fs-5 fw-bold">Категории</li>
                <?php foreach ($this->blogRubrics as $rubric) : ?>
                    <li class="list-group-item"><a
                                href="/rubric/?id=<?= $rubric->id ?>"><?= $rubric->rubric_name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>
    </div>
<div class="row mt-3">
    <h1 class="mt-5 mt-md-3 mb-4"><?= $this->blog->title ?></h1>
    <p class="fs-4 mb-lg-5"><?= $this->blog->content ?></p>
</div>

<?php include __DIR__ . '/../comment/index.php'; ?>

</div>
<div class="container-fluid">
    <nav aria-label="to prev next blog">
        <ul class="pagination mt-5 mx-sm-5">
            <li class="page-item me-auto <?= $this->prevBlog->id === null ? 'disabled' : '' ?>" aria-current="page">
                <a class="page-link"
                   href="/single-blog/?id=<?= $this->prevBlog->id ?? $this->blog->id ?>">Предыдущий</a>
            </li>
            <li class="page-item ms-auto <?= $this->nextBlog->id === null ? 'disabled' : '' ?>" aria-current="page">
                <a class="page-link"
                   href="/single-blog/?id=<?= $this->nextBlog->id ?? $this->blog->id ?>">Следующий</a>
            </li>
        </ul>
    </nav>
</div>
<div class="container">

