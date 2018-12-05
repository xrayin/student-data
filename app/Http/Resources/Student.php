<?php

namespace App\Http\Resources;
use App\Student as StudentModel;
use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return [
//            'student_id' => $this->student_id,
//            'name' => $this->name,
//            'email' => $this->email,
//            'password' => $this->password
//        ];
        return parent::toArray($request);

    }
}
