<?php

class Food extends Product
{

    private $weight;
    protected function __construct($weight)
    {
        parent::__construct();
        $this->weight = $weight;
    }

}