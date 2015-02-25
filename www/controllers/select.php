<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Выбор действия</title>
</head>
<body>
<form action="/index.php" method="post">
    <h2>Режим работы с лентой новостей</h2>
    <label><input type="radio" name="type_select" value="index">Просмотреть галлерею</label><br>
    <label><input type="radio" name="type_select" value="add">Добавить новое фото</label><br>
        <label><input type="radio" name="type_select" value="zap">Удалить что-нибудь</label><br>
    <input type="submit" value="Выполнить">
</form>
</body>
</html>
