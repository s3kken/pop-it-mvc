<div class="body">
    <div class="form">
        <h2>Добавление и редактирование студента</h2>
        <h3><?= $message ?? ''; ?></h3>

        <form class="login" method="post">
            <label>id студента<br><input type="text" name="idStudents"></label>
            <label>Фамилия<br><input type="text" name="surname"></label>
            <label>Имя<br><input type="text" name="name"></label>
            <label>Отчество<br><input type="text" name="patronymic"></label>
            <label>Пол<br><input type="text" name="gender"></label>
            <label>Дата рождения<br><input type="text" name="dateOfBirth"></label>
            <label>Адрес<br><input type="text" name="address"></label>
            <label>id группы<br><input type="text" name="idGroup"></label><br>
            <button>Создать</button>
        </form>
    </div>
</div>

<style>
    .form{
        border: solid rosybrown 2px;
        width: 500px;
        height: 750px;
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
