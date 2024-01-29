<?php

require_once __DIR__  . '/Product.php';

class Food extends Product{
    protected $calories;

    public function __construct(string $_img, string $_title, string $_description, $_category, $_type, $_price){
        parent::__construct($_title, $_description, $_price, $_type, $_img, $_category);
        
        $this->img = $_img;
        $this->title = $_title;
        $this->category = $_category;
        $this->description = $_description;
        $this->type = $_type;
        $this->price = $_price;
    
    }
}