<?php

use \App\Helper;

?>

<h1 class="mb-lg-5"><?= $this->mainTitle ?></h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 blogs">
        <?php
        foreach ($this->blogs as $blog) :
            ?>
            <div class="col blogs__card align-self-start ps-0 pe-0">
                <div class="card">
                    <div class="card-body single-table">
                        <a href="/single-blog/?id=<?= $blog->id ?>" class="stretched-link">
                            <img src="/assets/image/blogs/<?= $blog->img_folder ?>/1.jpeg" class="card-img-top"
                                 alt="Проект <?= $blog->id ?>">
                        </a>
                        <h5 class="card-title "><?= $blog->title ?></h5>
                        <p class="card-text"><?= Helper::getCutContent($blog->content) ?></p>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>




