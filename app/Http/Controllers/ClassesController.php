<?php

namespace App\Http\Controllers;

use App\Classes as ClassesModel;
use App\Http\Resources\Classes as ClassesResources;

class ClassesController extends Controller
{

    /**
     * @return ClassesResources
     */
    public function allClasses() : ClassesResources
    {
        return new ClassesResources(ClassesModel::all());
    }

    /**
     * @param $id
     * @return ClassesResources
     */
    public function getClass($id) : ClassesResources
    {
        return new ClassesResources(ClassesModel::find($id));
    }
}
