<?php

    namespace App\School\Student;
    use App\School\Trait\Timestampable;
    use App\School\User;
    use App\School\Student\StudentRepository;
    class Student extends User{
        use Timestampable;
        protected $enrollments=[];
        public function showSchool(){
            echo parent::MYSCHOOL;
        }

        function __construct($email,$name){
            parent::__construct($email,$name);
            $this->updateTimestamps();
        }
        
    }