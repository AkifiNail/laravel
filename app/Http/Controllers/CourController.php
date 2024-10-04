<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourRequests;
use Illuminate\Http\Request;    
use App\Models\Cour;
use Illuminate\Support\Facades\Gate;
use App\Models\Formation;
use App\Models\Groupe;

class CourController extends Controller
{
    public function index() {
        Gate::authorize('viewAny', Cour::class);


        $cours = Cour::orderBy('name')->get();
        
        return view('cours.index' , ['cours'=>Cour::orderBy('name')->get()]);
    }

    public function show(Cour $cour) {
        Gate::authorize('view', $cour);
        return view('cours.show' , ['cour' => $cour]);
    }

    public function create() {
        Gate::authorize('create', Cour::class);
        $formation = Formation::orderBy('name')->get();
        $groupes = Groupe::orderBy('name')->get();
        return view('cours.create' , ['formations' => $formation, 'groupes' => $groupes]);
    }

    public function store(CourRequests $request) {

        Gate::authorize('create', Cour::class);
        $data = $request->validated();

        $cour = new Cour();
        $cour->fill($data);
        $cour->save();
        return redirect()->route('cours.index');
    }

    public function edit(Cour $cour) {
        Gate::authorize('update', $cour);
        $formation = Formation::orderBy('name')->get();
        $groupes = Groupe::orderBy('name')->get();
        return view('cours.edit' , ['cour' => $cour, 'formations' => $formation, 'groupes' => $groupes]);
    }

    public function update(CourRequests $request, Cour $cour) {
        Gate::authorize('update', $cour);
        $data = $request->validated();
        $cour->fill($data);
        $cour->save();
        return redirect()->route('cours.index');
    }

    public function destroy(Cour $cour) {

        Gate::authorize('delete', $cour);

        $cour->delete();
        return redirect()->route('cours.index');
    }
}
