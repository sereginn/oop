<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Выбор действия</title>
</head>
<body>
<form action="/index.php" method="post">
    <h2>Режим работы с лентой новостей</h2>
    <input type="radio" name="type_select" value="index">Просмотреть галлерею<br>
    <input type="radio" name="type_select" value="add">Добавить новое фото<br>
    <input type="radio" name="type_select" value="zap">Удалить что-нибудь<br>
    <a href="/add.php"><input type="submit" value="Выполнить"></a>
</form>


</body>
</html>
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 23.02.2015
 * Time: 23:08
 */