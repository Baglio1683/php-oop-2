<?php
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Toy.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Bed.php';


$gatto = 'gatto';
$cane = 'cane';

$cat = new Category($gatto);
$dog = new Category($cane);

$crocchette = new Food($dog, 'FrisdogCrocchette', 50.50, 15);

$pallina = new Toy($dog, 'PallinaDOg', 10, 'rubber');

$cuccia = new Bed($cat, 'CucciaCat', 29.99, 15, 20); 

$products = [
    $crochette,
    $pallina,
    $cuccia
];