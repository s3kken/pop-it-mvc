<h2>Список преподавателей</h2>
<h3><?= $message ?? ''; ?></h3>


<button>Добавить</button>
<table>
    <tr>
        <td>id преподавателя</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Дисциплина</td>
    </tr>
    <?php
            foreach ($listTeachers as $teacher) {
                echo '<tr>';
                echo '<td>' . $teacher->idTeacher . '</td>';
                echo '<td>' . $teacher->surname . '</td>';
                echo '<td>' . $teacher->name . '</td>';
                echo '<td>' . $teacher->patronymic . '</td>';
                echo '<td>' . $teacher->idGroup . '</td>';
                '</tr>';

            }
            ?>

</table>
<!--<div>-->
<!--    <p>id преподавателя</p>-->
<!--    <p>Фамилия</p>-->
<!--    <p>Имя</p>-->
<!--    <p>Отчество</p>-->
<!--    <p>Дисциплина</p>-->
<!--</div>-->
<button>Ред.</button>
<button>Уд.</button>
<?php
