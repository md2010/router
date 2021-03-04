<?php

class Controller 
{
    public function index()
    {
        echo "Hello! This is index page.";
    }

    public function about()
    {
        echo "Hello! This is about page!";
    }

    public function getByID($id)
    {
        	echo "I got param " .$id;
    }

    public function deleteIndex()
    {
        echo "Delete something";
    }

    public function postIndex()
    {
        echo "This is index page, POST method";
    }

    public function putIndex()
    {
        echo "This is index page, PUT method";
    }
}