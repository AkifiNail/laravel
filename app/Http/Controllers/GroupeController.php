<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Groupe;

class GroupeController extends Controller
{
    public function index() {
        $groupes = Groupe::orderBy('name')->get();
        
        return view('groupes.index' , ['groupes' => $groupes]);
    }

    public function show(Groupe $groupe) {
        return view('groupes.show' , ['groupe' => $groupe]);
    }
}
