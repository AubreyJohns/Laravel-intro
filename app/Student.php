<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $casts = [
        'student_number'=>'integer',
        'name'=>'string',
        'DOB'=>'string',
        'address'=>'string'
    ];
    protected $fillable = ['student_number','name','DOB','address'];
    //one to many relationship, fee
    public function fees()
    {
        return $this->hasMany('App\Fee');
    }
}
