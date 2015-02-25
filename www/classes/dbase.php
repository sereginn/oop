<?php
class Dbase
{
    static private $user = 'root';
    static private $database = 'news';
    static public $sql_table = 'mynews';
   static private $host = 'oop.local';

    static public function Sql_connect()
    {
        mysql_connect(self::$host, self::$user, '');
        mysql_select_db(self::$database);
    }

    static public function query($sql,$class= 'stdClass')
    {
        $result = mysql_query($sql);
        if (false === $result) {
            return false;
        }

        $ret = [];
        while ($row = mysql_fetch_object($result,$class)) {
            $ret[] = $row;
        }
        return $ret;
    }
}