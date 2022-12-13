<?php
require_once __DIR__ . '/ShoppingBasket.php.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Account.php'; 

class Customer{

    private ShoppingBasket $basket; 
    private CreditCard $card;  
    private Account $personal_account; 


    function __construct(public string $name, public string $surname, public string $email){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email; 
    }


    //METHODS
    
    public function setShoppingBasket(ShoppingBasket $basket){

        $this->basket = $basket; 
    }
   
    public function setCreditCardt(CreditCard $card){

        $this->card = $card; 
    }

    public function setAccount(Account $account){

        $this->personal_account = $account; 
    }


    public function make_payment(){
       
    }

}


?>