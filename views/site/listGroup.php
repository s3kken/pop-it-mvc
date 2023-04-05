<h2>Список групп</h2>
<h3><?= $message ?? ''; ?></h3>

<?php
    foreach($listGroup as $group){
        echo '<div class="card">';
            '<div>';
            echo '<h4>' . 'Группа' . '</h4>';
            echo '<p>' . 'id группы:' .' '. $group->idGroup . '</p>';
            echo '<p>' . 'Семестр:' .' '. $group->semester . '</p>';
            echo '<p>' . 'Курс:' .' '. $group->course . '</p>';
            '</div>';
            '<div>';
            echo '<h4>' . 'Список студентов' . '</h4>';
            foreach($listStudents as $student){
                echo '<ol>';
                if($student->idGroup == $group->idGroup)
                    echo '<li>'. $student->surname .'</li>';
                '</ol>';
            }
            '</div>';
        '</div>';
    }
    ?>
<div class="card">
    <div>
        <h4>Группа</h4>
        <p>Номер</p>
        <p>Семестр</p>
        <p>Курс</p>
    </div>
    <div>
        <h4>Список студентов</h4>
        <ol>
            <li></li>
        </ol>
    </div>
    <div>
        <h4>Список дисциплин</h4>
        <ol>
            <li></li>
        </ol>
    </div>
</div>

<style>
    .card{
        border: solid black 1px;
        width: 500px;
    }
</style>
<?php
