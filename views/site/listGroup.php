<div class="body">
<h2>Список групп</h2>
<h3><?= $message ?? ''; ?></h3>

<?php
    foreach($listGroup as $group){
        echo'<div class="card">' .
            '<div>' .
            '<h4>' . 'Группа' . '</h4>' .
            '<p>' . 'id группы:' .' '. $group->idGroup . '</p>' .
            '<p>' . 'Семестр:' .' '. $group->semester . '</p>' .
            '<p>' . 'Курс:' .' '. $group->course . '</p>' .
            '</div>' .
            '<div>' .
            '<h4>' . 'Список студентов' . '</h4>' .
            '<div>' .
            '<ol>' ;
                if($group->idGroup == $group->ListStudents_view->idGroup){
                    echo '<li>'. $group->ListStudents_view->surname .'</li>';
                }
            echo '</ol>' .
            '</div>' .
            '</div>' .
        '</div>';
    }
    ?>
</div>

<style>
    .body{
        flex-direction: column;
        display: flex;
        width: 100%;
        align-items: center;

    }
    .card{
        border: solid rosybrown 1px;
        width: 500px;
        margin: 0 0 10px 0;
        padding: 0 0 0 20px;
    }
    h2, h4{
        color: FireBrick;
    }
    p, li{
        color: rosybrown;
    }
</style>
<?php
