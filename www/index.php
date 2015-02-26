<?php
session_start();
$_SESSION['ctrl']=isset($_GET['ctrl'])? $_GET['ctrl'] : 'News';
$_SESSION['act']=isset($_GET['act'])? $_GET['act'] : 'All';


var_dump($_SESSION['ctrl']); var_dump($_SESSION['act']);
require __DIR__ . '/classes/selectionOption.php';
SelectiOnoption::view();