<?php

namespace App\School;
class User{
    private string $email="test@test.com";
    private string $name;
    private string $password;
    function setEmail(string $email){
        $this->email=$email;
        return $this;
    }
    
    function getEmail(){
        return $this->email;
    }
}