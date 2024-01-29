<?php

require_once __DIR__  . '/Product.php';

class Toy extends Product{
    public $material;

    public function __construct(string $_img, string $_title, string $_description, $_category, $_price,  bool $_isInStock, $_quantity, string $_material){
        parent::__construct($_img, $_title, $_description, $_category, $_price, $_quantity, $_category);
        $this->material = $_material;
    }

    public function getAdditionalInfo(){
        return $this->material;
    }
}