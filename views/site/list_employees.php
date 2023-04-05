<div class="body">
    <div class="form">
<h2>Список сотрудников</h2>
<h3><?= $message ?? ''; ?></h3>

<div>
<button>Добавить</button>
<table>
    <tr>
        <td>id сотрудника</td>
        <td>id роли</td>
        <td>Логин</td>
        <td>Пароль</td>
    </tr>
    <?php
            foreach ($User as $us) {
                if($us->id_role == 2){
                echo '<tr>';
                echo '<td>' . $us->id . '</td>';
                echo '<td>' . $us->id_role . '</td>';
                echo '<td>' . $us->login . '</td>';
                echo '<td>' . $us->password . '</td>';
                echo '<td class="tdDrop">' . '<button>Ред.</button>' . '</td>';
                echo '<td class="tdDrop">' . '<button>Уд.</button>' . '</td>';
                '</tr>';
                }
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
