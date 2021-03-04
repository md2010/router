<?php

$r = $_SERVER['REQUEST_URI'];
//var_dump($r);


include_once 'Router/Router.php';
include_once 'Router/Routes.php';

$router = new Router();
$router->dispatch();
