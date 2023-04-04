<div class="body">
    <div class="form">
        <h2>Добавление и редактирование вида контроля</h2>
        <h3><?= $message ?? ''; ?></h3>

        <form method="post" class="login">
            <label>id вида контроля<br><input type="text" name="idControl"></label>
            <label>Название<br><input type="text" name="nameControl"></label><br>
            <button>Создать</button>
        </form>
    </div>
</div>
<style>
    .form{
        border: solid rosybrown 2px;
        width: 500px;
        height: 400px;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 50px 0 0 0;
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
        text-align: center;

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
        width: 250px;
        border-radius: 20px;
        border: solid rosybrown 2px;
    }
<?php
