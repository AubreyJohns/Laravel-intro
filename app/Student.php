<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_number','name','DOB','address'];
    //one to many relationship, fee
    public function fees()
    {
        return $this->hasMany('App\Fee');
    }
}
