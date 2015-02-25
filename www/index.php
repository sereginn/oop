<?php
require __DIR__ . '/classes/selectionOption.php';
$selectionoption=new SelectionOption;
if(empty($_POST))$selectionoption->type_view='/select.php';
else $selectionoption->type_view=$_POST['type_select'].'.php';
$selectionoption->view();