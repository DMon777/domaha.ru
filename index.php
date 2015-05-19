<?php
require_once "autoload.php";

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] :"Articles";
$action = isset($_GET['action']) ? $_GET['action'] :"All";

$controller = $ctrl."Controller";
$method = "action".$action;

$contr = new $controller();
$contr->$method();


?>