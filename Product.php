<?php

include_once __DIR__ . '/Categories.php';

abstract class Product
{

    protected Categories $category;
    protected string $Title;
    protected double $Price;
    protected string $Icon;
    protected string $NameType;

    protected function __construct($cat, $title, $price, $icon, $type)
    {
        $this->category = $cat;
        $this->Title = $title;
        $this->Price = $price;
        $this->Icon = $icon;
        $this->NameType = $type;
    }

}

?>