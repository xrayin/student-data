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

}
