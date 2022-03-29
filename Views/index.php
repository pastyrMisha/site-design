<?php
use \App\Helper;
?>
</div>
<div class="container-fluid home_index" style="margin-top: -3rem !important;">
    <section class="about row">
        <div class="col-lg-7 col-xl-5 text-center text-xl-end ps-0 pe-0">
            <img src="/assets/image/persona.jpg" class="img-fluid rounded" alt="Фотография дизайнера">
        </div>
        <div class="col-lg-5 col-xl-7 mt-5 d-flex flex-column justify-content-center gap-4">
            <div class="row text-center text-lg-start ms-lg-2">
                <h2><?= $this->mainTitle ?></h2>
                <h1 class="mb-lg-5" style="color: #f3969a;">Анастасии Звендиновой</h1>
            </div>
            <div class="row g-0 run_string">
                <div class="col-xs-12 marquee"><span class="fw-light">Дипломированный специалист</span></div>
                <div class="col-xs-12 marquee"><h1>Работаю быстро</h1></div>
                <div class="col-xs-12 marquee"><p class="lead fst-italic">Проявляю креатив</p></div>
                <div class="col-xs-12 marquee"><span>Умею работать в команде</span></div>
            </div>
            <p class="fs-3 mt-3 ms-4 mb-0 text-secondary">Я занимаюсь:</p>
            <div class="row ms-3 g-4 text-center">
                <ul class="list-group-flush">
                    <li class="list-group-item text-start d-flex justify-content-start align-items-center fs-5 border-0 mb-xl-3 ps-0">
                        <i class="fa-solid fa-square-check fa-xl me-4" style="color: #f3969a;"></i>
                        разработкой фирменного стиля
                    </li>
                    <li class="list-group-item text-start d-flex justify-content-start align-items-center fs-5 border-0 mb-xl-3 ps-0">
                        <i class="fa-solid fa-square-check fa-xl me-4" style="color: #f3969a;"></i>
                        созданием лого/аватарки для соц. сетей
                    </li>
                    <li class="list-group-item d-flex text-start justify-content-start align-items-center fs-5 border-0 mb-xl-3 ps-0">
                        <i class="fa-solid fa-square-check fa-xl me-4" style="color: #f3969a;"></i>
                        дизайном сайтов и ребрендингом
                    </li>
                    <li class="list-group-item text-start d-flex justify-content-start align-items-center fs-5 border-0 mb-xl-3 ps-0">
                        <i class="fa-solid fa-square-check fa-xl me-4" style="color: #f3969a;"></i>
                        изготовлением книжных макетов, визиток и логотипов
                    </li>
                    <li class="list-group-item text-start d-flex justify-content-start align-items-center fs-5 border-0 mb-xl-3 ps-0">
                        <i class="fa-solid fa-square-check fa-xl me-4" style="color: #f3969a;"></i>
                        созданием цифровых портретов, иллюстраций и плакатов
                    </li>
                </ul>
            </div>

            <ul class="text-secondary" style="list-style: disc;margin-left: 3rem!important;">
                <li style="font-size: 1.125rem;">
                    Владею навыками Adobe: Photoshop, Illustrator, InDesign, After Effects, а также 3D Max и Cinema 4D
                </li>
                <li style="font-size: 1.125rem;">
                    Знаю основы HTML и CSS
                </li>
                <li style="font-size: 1.125rem;">
                    В работе использую графический планшет
                </li>
                <li style="font-size: 1.125rem;">
                    Изучала основы маркетинга
                </li>
                <li style="font-size: 1.125rem;">
                    Имею хорошо развитое чувство стиля
                </li>
            </ul>
            <div class="single-table ms-4">
                <a href="/App/Controllers/contacts1.php" class="plan-submit hvr-bubble-float-right">Заказать работу</a>
            </div>
        </div>
    </section>

    <h3 class="fs-1 text-center my-5 fst-italic">“Хороший дизайн решает проблему, а не создает ее!”</h3>
    <div class="row flex-column">
        <div class="col-md-3 p-4 text-center"
             style="border:1px solid #f3969a; border-radius: 25px 25px 55px 5px/5px 55px 25px 25px; border-bottom: none;">
            <span class="fs-3 ms-3 fw-light text-secondary">Галерея, Портфолио</span>
            <h2 class="fs-1">Мои работы</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 projects">
    <?php
        foreach ($this->projects as $project) :
    ?>
        <div class="col project__card align-self-start ps-0 pe-0">
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
<div class="container">