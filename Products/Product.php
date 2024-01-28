<?php

class Product {
    public $img;
    public $title;
    public $description;
    public $price;
    public $category;
    public $type;
    public $id;
    

    public function __construct($_img, $_title, $_description, $_price, $_category, $_type) {
        $this->img = $_img;
        $this->title = $_title;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;
        
    }

}