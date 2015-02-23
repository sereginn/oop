<?php
require_once __DIR__ . '/../functions/sql.php';
function News_GetAll()
{
    Sql_connect();
    $sql='SELECT * FROM mynews';
    return Sql_query($sql);
}
/*_____________________________