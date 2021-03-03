<?php

include_once 'Controller/Controller.php';
require 'Routes.php'; 

class Router 
{
    private $controller;
    private $routes;

    public function __construct()
    {
        $this->controller = new Controller();
        $this->routes = new Routes();      
    }

    public function get($route) 
    {   
        call_user_func($this->routes->get_routes[$route]);
    }

}