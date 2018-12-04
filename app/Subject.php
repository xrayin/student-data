<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class Subject
 * @package App
 * @mixin Eloquent
 */
class Subject extends Model
{
    protected $primaryKey = 'subject_id';

    public function student()
    {
        return $this->hasMany(Student::class, 'student_id', 'subject_id');
    }
}
