<div class="comments">
<h2 id="feedback" class=" text-left pt-5 pb-4 ps-2 col-12 col-sm-4 col-md-3 col-lg-4 ms-lg-5 col-xl-5 col-xxl-3">
    Комментарии</h2>
<div class="row justify-content-center justify-content-sm-between ms-lg-5 align-items-start">

    <div class="row col-12 col-sm-6 col-lg-4 col-xl-5 col-xxl-3 mb-5 mb-sm-0">
        <form action="#" id="addComment">
            <div class="mb-3">
                <label for="inputLogin" class="form-label">Ваше имя</label>
                <input type="text" name="username" class="form-control _req _name" id="inputLogin" aria-describedby="loginHelp"
                       required>
                <div id="loginHelp" class="form-text">Введите @username</div>
            </div>
            <div class="mb-3">
                <input type="file" name="avatar" class="form-control" id="inputAvatar"
                       aria-describedby="avatarHelp">
                <div id="avatarHelp" class="form-text" aria-describedby="loginHelp">
                    <?php if (!empty($this->error)): ?>
                        <?= $this->error ?>
                    <?php else: ?>
                        Загрузить аватар
                    <?php endif; ?>
                </div>
            </div>
            <div class="my-3 tel">
                <label for="inputTel" class="form-label">Телефон</label>
                <input type="tel" name="tel" class="form-control _tel" id="inputTel">
            </div>
            <div class="my-0">
                <input type="hidden" id="blogId" name="blogId" value="<?= $_GET['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control _req _mail" id="inputEmail" required>
            </div>
            <div class="mb-3">
                <label for="inputComment" class="form-label">Тест сообщения</label>
                <textarea type="textarea" name="message" class="form-control _req _text" id="inputComment"
                          style="height:170px; resize:none;" required></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="check" class="form-check-input" id="checkBx" required>
                <label class="form-check-label _req" for="checkBx">Согласие на обработку данных</label>
            </div>
            <button type="submit" id="loadComments" class="btn btn-primary">Отправить</button>
        </form>
    </div>
    <div id="comments" class="row col-12 col-sm-7 col-md-6 col-lg-8 col-xl-7 col-xxl-9 mb-5 mb-sm-0">
        <?php include __DIR__ . '/../ajax-comment/index.php'?>
    </div>
</div>
</div>
<script src="/assets/js/loadComments.js"></script>