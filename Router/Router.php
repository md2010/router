<?php

include_once 'Controller/Controller.php';
include_once 'Request.php';
require 'Routes.php'; 

class Router 
{
    private $controller;
    private $routes;
    private $request;
    private $httpMethods = [
        'get' => 'Router::get', 
        'post' => 'Router::post', 
        'delete' => 'Router::delete'
    ];

    public function __construct()
    {
        $this->controller = new Controller();
        $this->routes = new Routes(); 
        $this->request = new Request();
    }

    public function get() 
    {   
        if (! array_key_exists($this->request->route(), $this->routes->get_routes)) {
            echo "Route not found!";
        }
        call_user_func($this->routes->get_routes[$this->request->route()], $this->request->param());
    }

    public function post()
    {
        if (! array_key_exists($this->request->route(), $this->routes->post_routes)) {
            echo "Route not found!";
        }
        call_user_func($this->routes->post_routes[$this->request->route()]);
    }

    public function delete()
    {
        if (! array_key_exists($this->request->route(), $this->routes->delete_routes)) {
            echo "Route not found!";
        }
        call_user_func($this->routes->delete_routes[$this->request->route()]);
    }

    public function put()
    {
        if (! array_key_exists($this->request->route(), $this->routes->put_routes)) {
            echo "Route not found!";
        }
        call_user_func($this->routes->put_routes[$this->request->route()]);
    }

    public function dispatch()
    {
        if (! array_key_exists($this->request->method(), $this->httpMethods)) {
            echo "ERROR: HTTP method not supported!";
        }
        call_user_func($this->httpMethods[$this->request->method()], $this->request->param());
    }

   
}