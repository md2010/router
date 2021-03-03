<?php

class Routes 
{
    public $get_routes = [
        "/index.php/" => 'Controller::index',
        "/index.php/about" => 'Controller::about',
        "/index.php/:id" => 'Controller::getByID'
    ]; 

    public $post_routes = [
        "/index.php/" => 'Controller::postIndex'
    ];

    public $delete_routes = [
        "/index.php/" => 'Controller::deleteIndex'
    ];

}
    