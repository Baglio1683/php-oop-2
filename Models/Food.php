<?php
require_once __DIR__ . '/Product.php'; 

class Food extends Product
{

    function __construct(public Category $category, public string $title, public float $price, public int $weight)
    {
        parent::__construct($category, $title, $price); 
        
        $this-> weight = $weight;

    }

    //METHODS
    
    function getWeight(){
        return $this-> weight;
    }


}