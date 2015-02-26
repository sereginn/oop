<?php
require_once __DIR__ . '/autoload.php';
session_start();
$_SESSION['ctrl']=isset($_GET['ctrl'])? $_GET['ctrl'] : 'News';
$_SESSION['act']=isset($_GET['act'])? $_GET['act'] : 'All';

SelectionOption::view();