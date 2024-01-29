<?php

require_once __DIR__  . '/Product.php';

class Food extends Product{
    public $img;
    protected $calories;
    public $description;
    public $category;
    public $fats;  // 9 per gram
    public $carbs; // 4 per gram
    public $proteins; // 4 per gram

    public function __construct(string $_img, string $_title, string $_description, $_category, $_type, $_price){
        parent::__construct($_title, $_description, $_price, $type, $_img, $_isInStock, $_category);
        
        $this->img = $_img;
        $this->title = $_title;
        $this->category = $_category;
        $this->description = $_description;
        $this->type = $_type;
        $this->price = $_price;
    
    }
}