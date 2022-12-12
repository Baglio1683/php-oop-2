<?php
include_once __DIR__ . '/Categories.php';
include_once __DIR__ . '/Product.php'; 


class Food extends Product
{

    function __construct($category,$title,$price)
    {
 
        $this-> category = $category;
        $this-> Title = $title; 
        $this-> Price = $price;
        $this->NameType = 'Food';

    }


    //METHODS 
    function print_category(){
       echo $this-> category ->print_name();
    }
function print_title(){
   echo $this->Title;
}
function print_price(){
    echo $this->Price;
}
function print_type(){
  echo $this->NameType;
}

function print_icon(){
 echo $this-> Icon;
}




}