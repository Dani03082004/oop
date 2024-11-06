<?php

use App\School\Teacher\Teacher;
use App\School\Student\Student;

ini_set('display_errors','On');
require __DIR__.'/vendor/autoload.php';
$student=new Student("test@test.com","test");
$teacher=new Teacher("profe@test.com","Jordi");
//$student->showSchool(); // acceder via objeto
dd($student,$teacher);