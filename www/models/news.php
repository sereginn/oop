<?php

class News
{
    public $id;
    public $title;
    public $path;
    public $time;
    public static $time1='2014-02-17 17:35:22';
    static public function Get_all()
    {
        Dbase::Sql_connect();
        return Dbase::query('SELECT title, time FROM ' .
            dbase::$sql_table . ' ORDER BY time DESC', 'News');
    }

    static public function Get_time()
    {

        Dbase::Sql_connect();
        return Dbase::query('SELECT title, time FROM ' .
            dbase::$sql_table . ' WHERE time >'. self::$time1,'News');



    }

}