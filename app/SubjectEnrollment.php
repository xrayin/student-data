<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectEnrollment extends Model
{
    protected $primaryKey = 'enrollment_id';

    public function student()
    {
        return $this->hasOne(Student::class, 'student_id', 'student_id');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, 'subject_id', 'subject_id');
    }
}
