<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    
    protected $casts = [
        'student_id'=>'integer',
        'amount'=>'integer',
        'paid_on'=>'string'
    ];
    protected $fillable = ['student_id','amount','paid_on'];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
