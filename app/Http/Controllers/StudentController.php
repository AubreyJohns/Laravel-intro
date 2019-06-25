<?php
namespace App\Http\Controllers;

use App\Student;
use App\Fee;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentView(){
        $students = Student::all();
        return view('101907.student',['students'=>$students]);
    }

    public function storeStudent(Request $request)
    {
        //Validate
        $request->validate([
            'student_number' => 'required|min:3',
            'name' => 'required',
            'DOB' => 'required',
            'address' => 'required',
        ]);

        $student = Student::create(['student_number' => $request->student_number,'name' => $request->name,'DOB' => $request->DOB,'address' => $request->address]);
        return redirect('/student/');
    }
}
