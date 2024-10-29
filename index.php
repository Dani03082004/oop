<?php
    ini_set('display_errors','On');
    require __DIR__.'/vendor/autoload.php';
    use App\School\Student;
    $student=new Student("test@test.com","test","M8");
    dd($student);