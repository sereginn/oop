<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Лента Новостей</title>
</head>
<body>
<ol>Новости недели:
    <?php
    var_dump($items);
    foreach ($items as $item):
       ?>
    <li><a href="../views/pagenews.php"><?php echo $item->title ?></a><br>
        Создана:
        <?php echo $item->time ?>
    </li> <?php endforeach;?>
</ol>
<a href="/">Вернуться на главную</a>
</body>
</html>
