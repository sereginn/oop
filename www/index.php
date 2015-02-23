<?php
require __DIR__ . '/classes/select.php';
$selected=new Select('root','news','mynews');
if(empty($_POST)){
    $type_view='select.php';
    $selected->type_view=$type_view;
}
else{
    $selected->type_view=$_POST['type_select'].'.php';
}
$selected->view();