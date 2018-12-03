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
        return $this->hasOne(Schedule::class, 'id', 'schedule');
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }

}
