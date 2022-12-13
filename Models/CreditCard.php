<?php 

class CreditCard{



     function __construct(private string $name,private  int $number,private  int $cvv,private  string $owner_name, private string $owner_surname,private int $expirationMonth,private  int $expirationYear){

        $this-> name = $name;
        $this->number = $number; 
        $this->cvv = $cvv; 
        $this->owner_name =$owner_name; 
        $this->owner_surname = $owner_surname;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear; 
     }

     
}

?>