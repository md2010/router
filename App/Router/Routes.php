<?php

namespace App\Router;

use App\Controllers\Controller;

class Routes 
{
    public $get_routes = [
        '/' => Controller::class.'::index',
        "/about" => Controller::class.'about',
        "/getByID" => Controller::class.'::getByID',
        "/post" => Controller::class.'::postIndex',
        "/edit" => Controller::class.'::edit',
        "/delete" => Controller::class.'::delete',
        "/deleteIndex" => Controller::class.'::deleteIndex'
    ]; 

    public $post_routes = [
        "/postSave" => Controller::class.'::postSave',
        "/update" => Controller::class.'::update',
    ];

    /* not supported!
     public $delete_routes = [
        "/delete" => Controller::class.'::delete'
    ];

    public $put_routes = [
        "/update" => Controller::class.'::update'
    ]; */

}
    