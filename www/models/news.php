<?php
require_once __DIR__ . '/../classes/dbase.php';
class News{
    public $id;
    public $title;
    public $path;
    public $time;

static public function Get_all()
{
    Dbase::Sql_connect();
    return Dbase::query('SELECT title, time FROM '. dbase::$sql_table .' ORDER BY time DESC', 'News');
}


}

