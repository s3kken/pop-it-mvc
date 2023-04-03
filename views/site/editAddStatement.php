<h2>Добавление и редактирование ведомости</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>id студента<input type="text" placeholder="id студента" name="loginEmployees"></label>
    <label>id вида контроля<input type="text" placeholder="id вида контроля" name="passwordEmployees"></label>
    <label>id дисциплины<input type="text" placeholder="id дисциплины" name="loginEmployees"></label>
    <label>Оценка<input type="text" placeholder="Оценка" name="passwordEmployees"></label>
    <button>Создать</button>
</form>
<?php