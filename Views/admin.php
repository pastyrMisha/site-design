<?php
\App\Helper::varDump($this->projectCategories);
?>
</div>
<div class="container-fluid text-end">
    <a href="/admin/index.php?exit" class="btn btn-outline-dark fs-5 text-danger text-primary">Выйти</a>
    <h1 class="text-center mb-5"><?= $this->mainTitle ?></h1>
</div>
<div class="container">
    <div id="admin-table" class="row g-0 my-5 border border-primary border-2 p-3 mx-auto">
        <h2 class="mb-4">Проекты</h2>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                <tr>
                    <th>Изображение-обложка</th>
                    <th>Заголовок</th>
                    <th>Контент</th>
                    <th>Заказчик</th>
                    <th>Url</th>
                    <th>Категории проекта</th>
                </tr>
                </thead>
                <tbody>
<!--                --><?php
//                foreach ($this->projects as $project) :
//                ?>
                <tr>

<!--                    <td>--><?//= $project->img_folder ?><!--</td>-->
<!--                    <td>--><?//= $project->title ?><!--</td>-->
<!--                    <td>--><?//= $project->content ?><!--</td>-->
                    <td>Заголовок 1</td>
                    <td>Заголовок 1</td>
                    <td>Заголовок 1</td>
                    <td>Заголовок 1</td>
                    <td>Заголовок 1</td>
                </tr>
<!--                --><?php
//                endforeach;
//                ?>

                </tbody>
            </table>
        </div>
    </div>
