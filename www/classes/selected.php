<?php
require __DIR__ . '/../functions/sql.php';
class Selected extends Select
{
    public $user;
    public $database;
    public $sql_table;
    public $type_query;
    public $host;
    public function Sql_connect()
    {
        mysql_connect($this->host, $this->user, '');
        mysql_select_db($this->database);
    }
    public function Get_all(){
        $sql="SELECT * FROM $this->sql_table";
        return Sql_query($sql);

    }
    public function __construct($host,$user, $database, $sql_table)
    {
        $this->user = $user;
        $this->database = $database;
        $this->sql_table = $sql_table;
        $this->host = $host;
    }
}