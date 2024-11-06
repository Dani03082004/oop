<?php

namespace App\School\Student;
use App\School\Student\Student;

interface StudentRepository{

    public function save(Student $student);
    public function findById($id);
}