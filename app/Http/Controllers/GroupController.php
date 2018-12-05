<?php

namespace App\Http\Controllers;


use \App\Group as GroupModel;
use App\Http\Resources\Group as GroupResource;
use App\Http\Resources\Group;

class GroupController extends Controller
{

    /**
     * @return Group
     */
    public function allGroups() : GroupResource
    {

        return new GroupResource(GroupModel::all());
    }

    /**
     * @param int $id
     * @return Group
     */
    public function getGroup(int $id) : GroupResource
    {

        return new GroupResource(GroupModel::find($id));
    }

    /**
     * @param int $id
     * @return Group
     */
    public function getStudentsByGroup(int $id) :GroupResource
    {

        $group = GroupModel::find($id);
        return new GroupResource($group->allStudents()->get());
    }
}
