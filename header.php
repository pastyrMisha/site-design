<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/image/favicon/ico_32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-5.1.3-dist/bootstrap.min.css">
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3db351570f.js" crossorigin="anonymous"></script>
    <title><?= $this->title ?> | Zvendinova Graphic Design</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand text-center logo_link xl-ms-4" href="/"><img class="img-fluid" src="/assets/image/logo/zvd.png" alt="Логотип"></a>
        <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse xl-me-5" id="navbarSupportedContent">
            <ul class="navbar-nav lg-ms-auto me-3 mb-2 mb-lg-0 xl-ms-auto justify-content-around nav_menu fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="/about/">О дизайнере</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portfolio/">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/price-list/">Прайслист</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts/">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog/">Блог</a>
                </li>

            </ul>
            <form class="d-flex lg-ms-auto form_search lg-me-3">
                <input class="form-control me-2 menu_search" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Искать</button>
            </form>
        </div>
    </div>
</nav>
<div class="main d-flex flex-column">

    <div class="container">

