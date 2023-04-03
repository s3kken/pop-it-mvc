<h2>Добавление и редактирование студента</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>id студента<input type="text" placeholder="id студента" name="idStudents"></label>
    <label>Фамилия<input type="text" placeholder="Фамилия" name="surname"></label>
    <label>Имя<input type="text" placeholder="Имя" name="name"></label>
    <label>Отчество<input type="text" placeholder="Отчество" name="patronymic"></label>
    <label>Пол<input type="text" placeholder="Пол" name="gender"></label>
    <label>Дата рождения<input type="text" placeholder="Дата рождения" name="dateOfBirth"></label>
    <label>Адрес<input type="text" placeholder="Адрес" name="address"></label>
    <label>id группы<input type="text" placeholder="id группы" name="idGroup"></label>
    <button>Создать</button>
</form>
<?php
