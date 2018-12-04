<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;


/**
 * Class Student
 * @package App
 * @mixin Eloquent
 */
class Student extends Model
{

    protected $primaryKey = 'student_id';

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'student_id', 'student_id');
    }

    public function group()
    {
        return $this->hasMany(GroupEnrollment::class, 'student_id', 'student_id')->join('groups', 'group_enrollments.enrollment_id', '=', 'groups.group_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'student_id', 'student_id');
    }

}
