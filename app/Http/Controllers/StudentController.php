<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{

    public function create(){

        return view('student.create');
    }

    // save data
    public function store(StudentFormRequest $request){
        $data = $request->validated();

        // first option for getting data from form
        $student = Student::create($data);
        return redirect('/add-student')->with('message','Student Add Successfully!');

        // second option for getting data from form
        // $student = student::create([
        //     'name' =>$data['name'],
        //     'email' =>$data['email'],
        //     'phone' =>$data['phone'],
        // ]);

    }

    // Student Details ( Retrive Data and display in table )
    public function studentDetails(){
        $studentDetails = Student::all();
        return view('student.studentDetails', compact('studentDetails'));
    }

    // Edit Student Details
    public function edit($student_id){
        $student = Student::find($student_id);
        return view('student.edit',compact('student'));
    }

    // Upadet Student Detaisl
    public function update(StudentFormRequest $request, $student_id){
        $data = $request->validated();
        $student = Student::where('id',$student_id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);
        return redirect('/student-details')->with('message','Student Update Successfully!');
    }


    // delete Student details
    public function destory($student_id){
        $student = Student::find($student_id)->delete();
        return redirect('/student-details')->with('message','Student Delete Successfully!');

    }




}
