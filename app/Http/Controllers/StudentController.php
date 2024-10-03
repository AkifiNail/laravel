<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Formation;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::orderBy('lastname')->orderBy('firstname')->get();
        
        return view('student.index' , ['students' => $students]);
    }

    public function create() {
        $formation = Formation::orderBy('name')->get();
        return view('student.create' , ['formations' => $formation]);
    }

    public function store(Request $request){

       $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric'
        ]);


        $student = new Student();
        $student->fill($data);
        $student->save();
        return redirect()->route('student.index');
    }

    public function show(Student $student) {
        return view('student.show' , ['student' => $student]);
    }

    public function edit(Student $student) {
        return view('student.edit' , ['student' => $student, 'formations' => Formation::orderBy('name')->get()]);
    }

    public function update(StudentRequest $request , Student $student) {

       $data = $request->validated();
        $student->fill($data);
        $student->save();
        return redirect()->route('student.index');
    }

    public function destroy(Student $student) {
        $student->delete();
        return redirect()->route('student.index');
    }
}
