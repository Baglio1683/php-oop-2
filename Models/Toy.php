<?php
require_once __DIR__ . '/Product.php'; 

class Toy extends Product
{



    function __construct(public Category $category, public string $title, public float $price, public string $material)
    {
        parent::__construct($category, $title, $price); 
        
        $this-> material = $material;

    }


     //METHODS 

    function getMaterial(){
        $this-> material;
    }    
    

}