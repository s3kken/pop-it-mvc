<h2>Список студентов</h2>
<h3><?= $message ?? ''; ?></h3>


<button>Добавить</button>
<table>
    <tr>
        <td>id студент</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Пол</td>
        <td>Дата рождения</td>
        <td>Адрес</td>
        <td>id группы</td>
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
