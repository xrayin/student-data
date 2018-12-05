<?php

namespace App\Http\Controllers;

use App\Subject as SubjectModel;
use App\Http\Resources\Subject as SubjectResource;

class SubjectController extends Controller
{

    /**
     * @return SubjectResource
     */
    public function allSubjects() : SubjectResource
    {

        return new SubjectResource(SubjectModel::all());
    }

    /**
     * @param $id
     * @return SubjectResource
     */
    public function getSubject($id) : SubjectResource
    {

        return new SubjectResource(SubjectModel::find($id));
    }
}
