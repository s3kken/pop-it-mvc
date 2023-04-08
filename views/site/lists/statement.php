<div class="body">
    <div class="form">
<h2>Ведомость</h2>
<h3><?= $message ?? ''; ?></h3>


<div>
<a href="<?= app()->route->getUrl('/editAddStatement')?>" class="button">Добавить</a>
<table>
    <tr>
        <td>Cтудент</td>
        <td>Вид контроля</td>
        <td>Дисциплина</td>
        <td>Оценка</td>
    </tr>
    <?php
            foreach ($statement as $state) {
                echo '<tr>';
                echo '<td>' . $state->titleStudents->surname . '</td>';
                echo '<td>' . $state->titleControl->title. '</td>';
                echo '<td>' . $state->idDisciplineGroup . '</td>';
                echo '<td>' . $state->grade . '</td>';
                '</tr>';

            }
            ?>

</table>
<form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_statement"/>
    <label>Сортировка по номеру дисциплины<br><select name="idDisciplineGroup">
        <?php
        foreach($discGr as $state){
        ?>
         <option value="<?= $state->idDisciplineGroup ?>"><?= $state->idDisciplineGroup ?></option>
        <?php } ?>
        <!-- <option value="1">1</option> -->
        <!-- <option value="2">2</option> -->
    </select></label>
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
    .body{
        flex-direction: column;
        display: flex;
        width: 100%;
        align-items: center;

    }
    select{
        width: 150px;
        height: 30px;
        margin: 0 0 10px 0;
        border-radius: 20px;
        border: solid FireBrick 2px;
    }
    tr, td{
        border: solid rosybrown 1px;
        color: FireBrick;
        padding: 5px;
    }
    h2{
        color: FireBrick;
    }
    label{
        color: rosybrown;
        font-size: 14pt;
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
