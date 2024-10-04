<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Student;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use AuthorizesRequests;

  

    public function index() {

        Gate::authorize('viewAny', Student::class);

    
        $students = Student::orderBy('lastname')->orderBy('firstname')->get();
        
        return view('student.index' , ['students' => $students]);
    }

    public function create() {

        // if(!Auth::check()) {
        //     abort(403);
        // }
        Gate::authorize('create', Student::class);
        $groupes = Groupe::orderBy('name')->get();
        $formation = Formation::orderBy('name')->get();
        return view('student.create' , ['formations' => $formation, 'groupes' => $groupes]);
    }

    public function store(StudentRequest $request){

        Gate::authorize('create', Student::class);


       $data = $request->validated();

        


        $student = new Student();
        $student->fill($data);
        $student->save();
        $student->groupes()->attach($data['groupes'] ?? null);
        return redirect()->route('student.index');
    }

    public function show(Student $student) {

        Gate::authorize('view', $student);


        return view('student.show' , ['student' => $student]);
    }

    public function edit(Student $student) {

        Gate::authorize('update', $student);
        $groupes = Groupe::orderBy('name')->get();

    
        return view('student.edit' , ['student' => $student, 'formations' => Formation::orderBy('name')->get(), 'groupes' => $groupes]);
    }

    public function update(StudentRequest $request , Student $student) {

        Gate::authorize('update', $student);

    
       $data = $request->validated();
        $student->fill($data);
        $student->save();
        return redirect()->route('student.index');
    }

    public function destroy(Student $student) {

        Gate::authorize('delete', $student);

        $student->delete();
        return redirect()->route('student.index');
    }
}
