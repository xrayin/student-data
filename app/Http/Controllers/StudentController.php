<?php

namespace App\Http\Controllers;

use App\Student as StudentModel;
use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\StudentCollection as StudentCollection;
use App\Student;

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

    /**
     * @param int $id
     * @return StudentResource
     */
    public function getGroupsByStudent(int $id): StudentResource
    {

        $student = StudentModel::find($id);
        return new StudentResource($student->allGroups()->get());
    }

    /**
     * @param int $id
     * @return StudentResource
     */
    public function getClassesByStudentGroups(int $id): StudentResource
    {

        $student = StudentModel::find($id);
        return new StudentResource($student->allClassesOnGroups()->get());
    }

    /**
     * @param int $id
     * @return StudentResource
     */
    public function getSubjectsByStudent(int $id): StudentResource
    {
        $student = StudentModel::find($id);
        return new StudentResource($student->allSubjects()->get());
    }

    /**
     * @param int $id
     * @return StudentResource
     */
    public function getClassesByStudentSubjects(int $id): StudentResource
    {

        $student = StudentModel::find($id);
        return new StudentResource($student->allClassesOnSubjects()->get());
    }
}
