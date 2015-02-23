?php
require __DIR__ . '/../classes/new.php';
require __DIR__ . '/../classes/selected.php';
$listnews=new Selected('oop','root','news','mynews');
$listnews->Sql_connect();
$list=$listnews->Get_all();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Лента Новостей</title>
</head>
<body>
<ol>Новости недели:
    <?php

    foreach ($list as $new):
        $art=new Article();
        $art->title=$new['title'];
        $pagenews='/views/pagenews.php';
        $art->pagenews=$pagenews;
        $art->time=$new['time'];
        $art->view();
    endforeach;?>
</ol>
<a href="/">Вернуться на главную</a>
</body>
</html>