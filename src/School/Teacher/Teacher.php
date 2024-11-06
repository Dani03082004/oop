<?php

namespace App\School\Teacher;
use App\School\Trait\Timestampable;
use App\School\User;
use App\School\Teacher\TeacherRepository;

class Teacher extends User{
    use Timestampable;
    protected $department;

    function __construct($email, $name){
        parent::__construct($email,$name);
        $this->updateTimestamps();
    }
}