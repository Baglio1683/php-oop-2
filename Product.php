<?php
include_once __DIR__ . '/Categories.php';

 abstract class Product
{

    protected Categories $category;
    protected string $Title;
    protected $Price;
    protected string $Icon;
    protected string $NameType;
    
    //METODI

    abstract function __construct($category, $title, $price); 
    abstract function print_category(); 
    abstract function print_title(); 
    abstract function print_price(); 
    abstract function print_type(); 

     abstract function print_icon();

}

?>