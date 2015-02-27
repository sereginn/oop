<?php

class NewsController {
public static function ActionAll()
    {
    $items=News::Get_all();
    include __DIR__ . '/../views/index.php' ;
    }
    public function Actiontime()
    {


        $items=News::Get_time();
        include __DIR__ . '/../views/index.php' ;
    }
}