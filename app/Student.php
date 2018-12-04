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

    public function allSubjects()
    {
        return $this->hasMany(SubjectEnrollment::class, 'student_id', 'student_id')
            ->join('subjects', 'subject_enrollments.subject_id', '=', 'subjects.subject_id');
    }

    public function allClasses()
    {
        return $this->hasMany(SubjectEnrollment::class, 'student_id', 'student_id')
            ->join('subjects', 'subject_enrollments.subject_id', '=', 'subjects.subject_id')
            ->join('subject_class_enrollments', 'subjects.subject_id', '=','subject_class_enrollments.subject_id')
            ->join('classes', 'subject_class_enrollments.class_id', '=', 'classes.class_id');
    }

}
