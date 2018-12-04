<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class Group
 * @package App
 * @mixin Eloquent
 */
class Group extends Model
{
    protected $primaryKey = 'group_id';

    public function group()
    {
        return $this->hasMany(GroupEnrollment::class, 'group_id', 'group_id');
    }
}
