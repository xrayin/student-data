<?php

namespace App\Http\Controllers;

use App\Student as Student;
use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\StudentCollection as StudentCollection;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all()
    {
        return new StudentCollection(StudentResource::all());
    }
}
