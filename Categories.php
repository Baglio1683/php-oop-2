<?php
class Categories
{

 protected $name_category; 

function __construct($name){
        if ($name === "Dog" || $name === "Cat") {
            $this->name_category = $name;
        }
        else{
            exit('errore inserimento tipo categoria'); 
        }
}

function print_name(){
    echo $this->name_category;
}

}


?>