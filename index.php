<?php
use src\controller\RolesController;
require_once "config/autoload.php";

$mvc = new \libs\system\BootStrap();
echo("<br/>");

$rolesdao = new RolesController();
//$rolesdao->add();
$rolesdao->getAll();