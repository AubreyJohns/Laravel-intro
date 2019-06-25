<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{

    protected $casts = [
        'student_number'=>'integer',
        'amount'=>'integer',
        'paid_on'=>'string'
    ];
    protected $fillable = ['student_number','amount','paid_on'];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
