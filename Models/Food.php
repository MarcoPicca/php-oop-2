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

    public function __construct(string $_img, string $_title, string $_description, $_category, $_price,  bool $_isInStock, $_quantity, float $_fats, float $_carbs,  float $_proteins){
        parent::__construct($_title, $_description, $_price, $_img, $_isInStock, $_quantity, $_category);
        $this->fats = $_fats;
        $this->img = $_img;
        $this->title = $_title;
        $this->category = $_category;
        $this->description = $_description;
        $this->carbs = $_carbs;
        $this->proteins = $_proteins;
        $this->calories = ($_fats * 9) + ($_carbs + $_proteins) * 4;
    }
}