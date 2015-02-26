<?php
class SelectionOption{
    public static $type_view;
   static function view()
    {
        if(empty($_POST)){self::$type_view ='/select.php';
            return include __DIR__ . '/../views/' . Self::$type_view;}
        else{self::$type_view=$_POST['type_select'].'.php';
            return include __DIR__ . '/../controllers/' . Self::$type_view;}
    }
}