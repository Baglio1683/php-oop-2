<?php
include_once __DIR__ . '/Categories.php';

class Games extends Product
{

    function __construct($category,$title,$price)
    { 
        $this-> category = $category;
        $this-> Title = $title; 
        $this-> Price = $price;
        $this-> NameType = 'Games';
    }

     //METHODS 
    function print_category(){
        echo $this-> category->print_name();
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