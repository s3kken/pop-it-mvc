<h2>Добавление и редактирование сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>Логин<input type="text" placeholder="Логин" name="loginEmployees"></label>
    <label>Пароль<input type="text" placeholder="Пароль" name="passwordEmployees"></label>
    <button>Создать</button>
</form>
<?php