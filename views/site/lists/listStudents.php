<div class="body">
    <div class="form">
<h2>Список студентов</h2>
<h3><?= $message ?? ''; ?></h3>

<div>
<a href="<?= app()->route->getUrl('/editAddStudent')?>" class="button">Добавить</a>
<table>
    <tr>
        <td>id студент</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Пол</td>
        <td>Дата рождения</td>
        <td>Адрес</td>
        <td>№ группы</td>
    </tr>
    <?php
            foreach ($listStudents as $student) {
                echo '<tr>';
                echo '<td>' . $student->idStudent . '</td>';
                echo '<td>' . $student->surname . '</td>';
                echo '<td>' . $student->name . '</td>';
                echo '<td>' . $student->patronymic . '</td>';
                echo '<td>' . $student->gender . '</td>';
                echo '<td>' . $student->dateOfBirth . '</td>';
                echo '<td>' . $student->address . '</td>';
                echo '<td>' . $student->idGroup . '</td>';
                '</tr>';

            }
            ?>

</table>
<form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="search_student"/>
    <input name="search" type="text">
            <button type="submit">Найти</button><br>
        </form>
</div>
    </div>
</div>
<style>
    .form{
            border: solid rosybrown 2px;
            padding: 30px;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 20px 0 0 0;
            border-radius: 10px;
        }
    input{
        width: 200px;
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
    tr, td{
        border: solid rosybrown 1px;
        color: FireBrick;
        padding: 5px;
    }
    h2{
        color: FireBrick;
    }
    button, .button{
        text-align: center;
        padding: 8px 15px 8px 15px;
        font-size: 10pt;
        background-color: rosybrown;
        color: white;
        width: 90px;
        border-radius: 7px;
        border: solid rosybrown 2px;
    }
    .tdDrop{
        border: solid white 1px;
    }
    table{
        margin: 10px 0 0 0;
    }
</style>
<?php
