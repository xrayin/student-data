<?php

namespace App\Http\Controllers;

use App\Student as StudentModel;
use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\StudentCollection as StudentCollection;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * @return StudentCollection
     */
    public function allStudents(): StudentCollection
    {

        return new StudentCollection(StudentModel::all());
    }

    /**
     * @param int $id
     * @return StudentResource
     */
    public function getStudent(int $id): StudentResource
    {

        return new StudentResource(StudentModel::find($id));
    }
}
