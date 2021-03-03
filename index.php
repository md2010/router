<?php

include_once 'Router/Router.php';
include_once 'Router/Routes.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router();

$router->get($request);
