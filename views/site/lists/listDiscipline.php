<div class="body">
    <div class="form">
<h2>Список дисциплин</h2>
<h3><?= $message ?? ''; ?></h3>

<div>
<button>Добавить</button>
<table>
    <tr>
        <td>id дисциплины</td>
        <td>Название</td>
        <td>Количество часов</td>
    </tr>
    <?php
            foreach ($listDiscipline as $discipline) {
                echo '<tr>';
                echo '<td>' . $discipline->id_discipline . '</td>';
                echo '<td>' . $discipline->title . '</td>';
                echo '<td>' . $discipline->hours . '</td>';
                echo '<td class="tdDrop">' . '<button>Ред.</button>' . '</td>';
                echo '<td class="tdDrop">' . '<button>Уд.</button>' . '</td>';
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
    button{
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
