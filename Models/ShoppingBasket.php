<?php

class ShoppingBasket{

    private $products;

    function __construct($products = [])
    {
        $this->products = $products; 
    }
}

?>