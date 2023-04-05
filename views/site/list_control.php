<h2>Список видов контроля</h2>
<h3><?= $message ?? ''; ?></h3>


<button>Добавить</button>
<table>
    <tr>
        <td>id вида контроля</td>
        <td>Название</td>
    </tr>
    <?php
            foreach ($control as $cont) {
                echo '<tr>';
                echo '<td>' . $cont->id_control . '</td>';
                echo '<td>' . $cont->title . '</td>';
                echo '<td class="tdDrop">' . '<button>Ред.</button>' . '</td>';
                echo '<td class="tdDrop">' . '<button>Уд.</button>' . '</td>';
                '</tr>';

            }
            ?>

</table>
<style>
     tr, td{
        border: solid rosybrown 1px;
        color: black;
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
</style>
<?php


