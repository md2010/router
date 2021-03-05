<?php

namespace App\Models;

class Car extends BaseModel 
{
    public $attributes = ['name', 'model', 'year'];

    public function __construct()
    {
        parent::__construct($this->attributes);
    }

}
