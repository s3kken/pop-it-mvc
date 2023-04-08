<div class="body">
    <div class="form">
<h2>Список дисциплин</h2>
<h3><?= $message ?? ''; ?></h3>

<div>
<a href="<?= app()->route->getUrl('/editAddDiscipline')?>" class="button">Добавить</a>
<table>
    <tr>
        <td>№ дисциплины</td>
        <td>Название</td>
        <td>Количество часов</td>
        <td>Курс</td>
    </tr>
    <?php
            foreach ($listDiscipline as $discipline) {
                ?>
                <tr>
                <td> <?= $discipline->id?> </td>
                <td> <?= $discipline->title?> </td>
                <td> <?= $discipline->hours ?></td>
                <td> <?= $discipline->course ?></td>
                <td> <?= $discipline->semester ?></td>
                <td class="tdDrop"><a href="<?= app()->route->getUrl("/editDiscipline?id=$discipline->id") ?>" class="button">Редактировать</a></td>
                </tr>
                <?php
            }
            ?>

</table>
<form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_disc"/>
    <label>Сортировка по курсу<br><select name="course">
        <?php
        foreach($cour as $c){
        ?>
         <option value="<?= $c->id ?>"><?= $c->id ?></option>
        <?php } ?>
        <!-- <option value="1">1</option> -->
        <!-- <option value="2">2</option> -->
    </select></label>
            <button type="submit">Найти</button><br>
        </form>

<form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_sem"/>
    <label>Сортировка по семестру<br><select name="semester">
        <?php
        foreach($sem as $s){
        ?>
            <option value="<?= $s->id ?>"><?= $s->id ?></option>
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
   select{
        width: 150px;
        height: 30px;
        margin: 0 0 10px 0;
        border-radius: 20px;
        border: solid FireBrick 2px;
    }
    label{
        color: rosybrown;
        font-size: 14pt;
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
        padding: 8px 15px 0px 15px;
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
