<div class="row g-0 my-5 col-7 col-sm-6 col-md-5 col-lg-4 col-xl-3 mx-auto">
    <h2 class="mb-4 text-center text-info"></h2>
    <form action="/admin/index.php" method="post" name="authorization">
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" id="inputLogin" aria-describedby="loginHelp">
            <div id="loginHelp" class="form-text">Введите имя пользователя</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="inputPassword">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
