<?php

class ShoppingBasket{

    private $products;

    function __construct($products = [])
    {
        $this->products = $products; 
    }


    //METHODS 

    function add_product(Product $product){

        $this->products = $product;

    }

    
}

?>