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
