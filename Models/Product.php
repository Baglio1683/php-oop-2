<?php
require_once __DIR__ . '/Category.php';

 class Product
{
   function __construct(public Category $category, public string $title, public float $price){

    $this-> category = $category;
    $this-> title = $title;
    $this-> price = $price;

   }
  
   //METHODS

   function getCategory(){
      return $this-> category; 
   }

   function getTitle(){
      return $this-> title; 
   }

   function getPrice(){
      return $this-> price;
   }
  
   }

?>