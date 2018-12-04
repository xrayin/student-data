<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupEnrollment extends Model
{

    protected $primaryKey = 'enrollment_id';

    public function student()
    {
        return $this->hasOne(Student::class, 'student_id', 'student_id');
    }

    public function group()
    {
        return $this->hasOne(Group::class, 'group_id', 'group_id');
    }
}
