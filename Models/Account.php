<?php 

class Account{

    private string $user;
    private string $password;

    private string $recovery_email; 

    function __construct($user, $password, $recovery_email)
    {
        $this->user = $user;
        $this->password = $password;
        $this->recovery_email = $recovery_email; 
    }

}

