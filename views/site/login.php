<div class="body">
    <div class="form">
<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form class="login" method="post">
        <label>Логин <br><input type="text" name="login"></label>
        <label>Пароль <br><input type="password" name="password"></label><br>
        <button>Войти</button>
    </form>
    </div>
</div>
    <style>
        .form{
            border: solid rosybrown 2px;
            width: 500px;
            height: 380px;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 200px 0 0 0;
            border-radius: 10px;
        }
        .login{
            display: flex;
            flex-direction: column;
            width: 500px;
            align-items: center;
        }
        input{
            width: 250px;
            height: 30px;
            margin: 0 0 10px 0;
            border-radius: 20px;
            border: solid FireBrick 2px;
        }
        .body{
            flex-direction: column;
            display: flex;
            width: 100%;
            align-items: center;

        }
        h2{
            color: rosybrown;

        }
        h3{
            color: FireBrick;
        }
        label{
            color: rosybrown;
            font-size: 14pt;
        }
        button{
            padding: 8px 15px 8px 15px;
            font-size: 14pt;
            background-color: rosybrown;
            color: white;
            width: 120px;
            border-radius: 20px;
            border: solid rosybrown 2px;
        }
    </style>
<?php endif;

