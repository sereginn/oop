<?php
/*___________________________________________________________*/
function Sql_query($sql){
    $res=mysql_query($sql);
    $result=[];
    while (false !== $row =mysql_fetch_assoc($res)){
        $result[]= $row;
    }
    return $result;
}
/*_____________________________________________________________*/
function Sql_exec($sql)
{
    mysql_query($sql);
}