<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::orderBy('name')->get();
        
        return view('formations.index' , ['formations'=>Formation::orderBy('name')->get()]);
    }

    public function show(Formation $formation) {
        return view('formations.show' , ['formation' => $formation]);
    }
}


