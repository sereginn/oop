<?php
session_start();
require_once __DIR__ . '/../autoload.php';
$contr=$_SESSION['ctrl'];
$act=$_SESSION['act'];

$ControllerClassName= $contr . 'Controller';

$metod='action'. $act;
$ControllerClassName ::$metod();
