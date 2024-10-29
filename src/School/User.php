<?php

namespace App\School;
abstract class User{
    protected string $email="test@test.com";
    protected string $name;
    protected string $password;

    function __construct($email,$name){
        $this->email=$email;
        $this->name=$name;
    }
    function setEmail(string $email){
        $this->email=$email;
        return $this;
    }
    
    function getEmail(){
        return $this->email;
    }
}