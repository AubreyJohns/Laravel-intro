<?php

namespace App\Http\Controllers;

use App\Student;
use App\Fee;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    
    public function feesView(){
        $fees = Fee::all();
        return view('101907.fees',['fees'=>$fees]);
    }

    public function amountView(){
        $fees = Fee::sum('amount');
        return view('101907.amount', ['fees'=>$fees]);
    }

    public function storeFees(Request $request)
    {
        //Validate
        $request->validate([
            'student_id' => 'required|min:3',
            'amount' => 'required',
            'paid_on' => 'required',
        ]);

        $fee = Fee::create(['student_id' => $request->student_id,'amount' => $request->amount,'paid_on' => $request->paid_on]);
        return redirect('/fees/');
    }

    public function getFees(Request $request)
    {
        //Validate
        $request->validate([
            'student_id' => 'required|min:3',
        ]);
        $fees=Fee::where('student_id',$request->student_id)->get(['student_id','amount','paid_on']);
        $amount=Fee::where('student_id',$request->student_id)->sum('amount');
        return view('101907.studentFees',['fees'=>$fees],['amount'=>$amount]);
    }
}
