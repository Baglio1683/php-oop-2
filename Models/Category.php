<?php
class Category
{

 protected string $name_category; 

function __construct($name){
        $this->name_category = $name;
}

//METHODS

function get_Name_Category(){
    return $this-> name_category;
}

}


?>