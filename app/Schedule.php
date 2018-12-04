<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class Schedule
 * @package App
 * @mixin Eloquent
 */
class Schedule extends Model
{
    protected $primaryKey = 'schedule_id';

    public function student()
    {
        return $this->hasMany(Student::class, 'student_id', 'schedule_id');
    }
}
