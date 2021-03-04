<?php

class Routes 
{
    public $get_routes = [
        '/' => 'Controller::index',
        "/about" => 'Controller::about',
        "/getByID" => 'Controller::getByID'
    ]; 

    public $post_routes = [
        "/" => 'Controller::postIndex'
    ];

    public $delete_routes = [
        "/" => 'Controller::deleteIndex'
    ];

    public $put_routes = [
        "/" => 'Controller::putIndex'
    ];

}
    