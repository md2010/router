<?php

namespace App\Controllers;

use App\Models\Car;
use Loader;

class Controller 
{
    public function index()
    {      
        $car = new Car();    
        $data = $car->getAll();
        if($data) {
            echo Loader::load()->render('index.twig', ['name' => $data[0]["name"], 
                    'id' => $data[0]["id"], 'model' => $data[0]["model"], 'year' => $data[0]["year"]]);
        } else {
            echo "Nothing in DB!";
        }
    }

    public function about()
    {
        echo "Hello! This is about page!";
    }

    public function getByID($id)
    {
        $car = new Car();      
        $data = $car->getByID($id);
        echo Loader::load()->render('index.twig', [
            'id' => $data["id"], 
            'name' => $data["name"], 
            'model' => $data["model"], 
            'year' => $data["year"]
        ]);
    }

    public function deleteIndex()
    {
        $id = $_GET["id"];
        $car = new Car();
        $car->delete($id);
        header("Location: http://index.local/");
    }

    public function postIndex()
    {
        echo Loader::load()->render('post.twig');
    }

    public function postSave()
    {
        $car = new Car(); 
        $values = $_POST['car'];
        $car->create($values);
        $car->save();
        self::edit($car->getKeyValue());
        header("Location: http://index.local/edit?".$car->getKeyValue());
    }

    public function edit($id)
    {
        $car = new Car();      
        $data = $car->getByID($id);
        echo Loader::load()->render('edit.twig', [
            'id' => $data["id"], 
            'name' => $data["name"], 
            'model' => $data["model"], 
            'year' => $data["year"]
        ]);
    }

    public function putIndex()
    {
        echo "This is index page, PUT method";
    }

    public function update() 
    {
        $car = new Car(); 
        $values = [$_POST["id"], $_POST["name"], $_POST["model"], $_POST["year"]];
        $car->updateDB($values);
        self::edit($values[0]);
        header("Location: http://index.local/edit?".$values[0]);
    }

    public function delete($id)
    {
        $car = new Car();
        $car->delete($id);
        header("Location: http://index.local/");
    }
}