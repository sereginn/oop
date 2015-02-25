
<?php

require_once __DIR__ . '/../models/News.php';
$items=News::Get_all();
/*var_dump($items);*/
include __DIR__ . '/../views/index.php' ;