<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
    public function index() {

        Gate::authorize('viewAny', Formation::class);

        $formations = Formation::orderBy('name')->get();
        
        return view('formations.index' , ['formations'=>Formation::orderBy('name')->get()]);
    }

    public function create() {

        Gate::authorize('create', Formation::class);


        return view('formations.create');
    }


    public function store(Request $request) {

        Gate::authorize('create', Formation::class);

        $data = $request->validate([
            'name' => 'required',
            'years' => 'required|numeric'
        ]);

        $formation = new Formation();
        $formation->fill($data);
        $formation->save();
        return redirect()->route('formations.index');
    }

    public function show(Formation $formation) {

        Gate::authorize('view', $formation);

        return view('formations.show' , ['formation' => $formation]);
    }

    public function edit(Formation $formation) {

        Gate::authorize('edit', Formation::class);
        return view('formations.edit' , ['formation' => $formation]);
    }

    public function destroy(Formation $formation) {

        Gate::authorize('delete', Formation::class);
        $formation->delete();
        return redirect()->route('formations.index');
    }

    public function update(Request $request , Formation $formation) {

        Gate::authorize('update', Formation::class);

       $data = $request->validate([
            'name' => 'required',
            'years' => 'required|numeric'
        ]);
        $formation->fill($data);
        $formation->save();
        return redirect()->route('formations.index');
    }
}


