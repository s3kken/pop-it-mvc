<div class="body">
    <div class="form">
<h2>Список преподавателей</h2>
<h3><?= $message ?? ''; ?></h3>

<div>
<button>Добавить</button>
<table>
    <tr>
        <td>id преподавателя</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
    </tr>
    <?php
            foreach ($listTeachers as $teacher) {
                echo '<tr>';
                echo '<td>' . $teacher->id_teacher . '</td>';
                echo '<td>' . $teacher->surname . '</td>';
                echo '<td>' . $teacher->name . '</td>';
                echo '<td>' . $teacher->patronymic . '</td>';
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
            width: 700px;
            height: 380px;
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
