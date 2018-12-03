<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use App\Http\Resources\Classes as ClassesResources;

class ClassesController extends Controller
{
    public function getClassBasedOnGroup()
    {
        return new ClassesResources(Classes::all());
    }
}
