<h2>Добавление и редактирование вида контроля</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label>id вида контроля<input type="text" placeholder="id дисциплины" name="idControl"></label>
    <label>Название<input type="text" placeholder="Название" name="nameControl"></label>
    <button>Создать</button>
</form>
<?php
