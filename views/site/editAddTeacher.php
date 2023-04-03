<h2>Добавление и редактирование преподавателя</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>id преподавателя<input type="text" placeholder="id преподавателя" name="idTeacher"></label>
    <label>Фамилия<input type="text" placeholder="Фамилия" name="surname"></label>
    <label>Имя<input type="text" placeholder="Имя" name="name"></label>
    <label>Отчество<input type="text" placeholder="Отчество" name="patronymic"></label>
    <label>id дисциплины<input type="text" placeholder="id дисциплины" name="idDiscipline"></label>
    <button>Создать</button>
</form>
<?php
