<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <a href="<?= app()->route->getUrl('/listTeachers')?>">Редактирование преподавателей</a>
        <?php
        endif;
        ?>
    </nav>
</header>

<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>

<style>
    body{
        width: 100%;
        margin: 0;
    }
    nav{
        display: flex;
        justify-content: center;
        background-color: rosybrown;
        padding: 20px
    }
    a{
        padding: 0 20px 0 20px;
        font-size: 14pt;
        color: white;
        text-decoration: none
    }
</style>