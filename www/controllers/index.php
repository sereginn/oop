<?php
session_start();

$contr=$_SESSION['ctrl'];
$act=$_SESSION['act'];

$ControllerClassName= $contr . 'Controller';
require_once __DIR__ . '/' . $ControllerClassName . '.php';
$metod='action'. $act;
$ControllerClassName ::$metod();
var_dump($ControllerClassName);