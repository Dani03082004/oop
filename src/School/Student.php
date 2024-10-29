<?php

    namespace App\School;
    use App\School\User;
    class Student extends User{
        protected $courses=[];

        function __construct($email,$name,$course){
            parent::__construct($email,$name);
            $this->courses[]=$course;
        }
        
    }