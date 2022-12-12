<?php
include_once __DIR__ . '/Categories.php';
include_once __DIR__ . '/Food.php'; 
include_once __DIR__ . '/Product.php'; 


$category = new Categories('Dog');
$Title = 'Crocchette';
$Price = 50.50;


$Product1 = new Food($category,$Title,$Price);


$Product1->print_title();
echo '  '; 
$Product1->print_price();
echo '  '; 
$Product1->print_type();
echo '  '; 
$Product1->print_category(); 



?>

