<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Cour;

class CourController extends Controller
{
    public function index() {
        $cours = Cour::orderBy('name')->get();
        
        return view('cours.index' , ['cours'=>Cour::orderBy('name')->get()]);
    }

    public function show(Cour $cour) {
        return view('cours.show' , ['cour' => $cour]);
    }
}
