<?php

class Customer{


    function __construct(public string $name, public string $surname, public string $email){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email; 
    }




}


?>