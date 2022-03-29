<?php
require_once __DIR__ . '/..' . '/App/autoload.php';

use App\Models\Comment as CommentModel;

$comments = CommentModel::singleFindByTagId($_GET['id']);
?>

<?php
foreach ($comments as $comment) :
    ?>
    <div class="media border p-3 mb-3 d-flex flex-column">
        <div class="d-flex align-items-end">
            <img src="/assets/image/avatar/<?= ('' === $comment->avatar) ? 'img_avatar3.png' : $comment->avatar ?>" alt="Аватар пользователя"
                 class="mr-3 mt-3 rounded-circle"
                 style="width:60px;">
            <p class=" fs-4 ms-2 flex-grow-1 me-auto">@<?= $comment->nickname ?></p>
        </div>
        <div class="media-body mt-3">
            <p><?= $comment->content ?></p>
        </div>
    </div>
<?php
endforeach;
?>