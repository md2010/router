<?php

include_once 'Controller/Controller.php';
require 'Routes.php'; 

class Router 
{
    private $controller;
    private $routes;
    private $request;
    private $method;
    private $httpMethods = [
        'get' => 'Router::get', 
        'post' => 'Router::post', 
        'delete' => 'Router::delete'
    ];

    public function __construct()
    {
        $this->controller = new Controller();
        $this->routes = new Routes(); 
        $this->request = $_SERVER['REQUEST_URI'];;   
    }

    public function get() 
    {   
        call_user_func($this->routes->get_routes[$this->request]);
    }

    public function post()
    {
        call_user_func($this->routes->post_routes[$this->request]);
    }

    public function delete()
    {
        call_user_func($this->routes->delete_routes[$this->request]);
    }

    public function dispatch()
    {
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        if (! array_key_exists($this->method, $this->httpMethods)) {
            echo "ERROR: HTTP method not supported!";
        }
        call_user_func($this->httpMethods[$this->method]);
    }
   
}