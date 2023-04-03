<h2>Добавление и редактирование дисциплины</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>id дисциплины<input type="text" placeholder="id дисциплины" name="idDiscipline"></label>
    <label>Название<input type="text" placeholder="Название" name="title"></label>
    <label>Курс<input type="text" placeholder="Курс" name="course"></label>
    <label>Семестр<input type="text" placeholder="Семестр" name="semester"></label>
    <label>Кол-во часов<input type="text" placeholder="Кол-во часов" name="hours"></label>
    <label>id преподавателя<input type="text" placeholder="id преподавателя" name="idTeacher"></label>
    <button>Создать</button>
</form>
<?php
