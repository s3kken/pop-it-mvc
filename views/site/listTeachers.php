<h2>Список преподавателей</h2>
<h3><?= $message ?? ''; ?></h3>


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
                echo '<td>' . '<button>Ред.</button>' . '</td>';
                echo '<td>' . '<button>Уд.</button>' . '</td>';
                '</tr>';

            }
            ?>

</table>
<style>
     tr, td{
        border: solid black 1px;
    }
</style>
<?php
