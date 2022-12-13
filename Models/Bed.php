<?php
require_once __DIR__ . '/Product.php';

class Bed extends Product
{


     function __construct(public Category $category, public string $title, public float $price, public float $length, public float $height)
     {
         parent::__construct($category, $title, $price); 
         
         $this-> length = $length;
         $this-> height = $height;
 
     }

     //METHODS 

     function getLength(){
       return $this-> length; 
     }

     function getHeight(){
        return $this-> height;
     }

}