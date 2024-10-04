<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrouperRequest;
use Illuminate\Http\Request;
use App\Models\Groupe;
use Illuminate\Support\Facades\Gate;

class GroupeController extends Controller
{
    public function index() {

        Gate::authorize('viewAny', Groupe::class);
        $groupes = Groupe::orderBy('name')->get();
        
        return view('groupes.index' , ['groupes' => $groupes]);
    }

    public function show(Groupe $groupe) {
        Gate::authorize('view', $groupe);
        return view('groupes.show' , ['groupe' => $groupe]);
    }

    public function create() {
        Gate::authorize('create', Groupe::class);
        return view('groupes.create');
    }

    public function store(GrouperRequest $request) {
        Gate::authorize('create', Groupe::class);
        $data = $request->validated();
        $groupe = new Groupe();
        $groupe->fill($data);
        $groupe->save();
        return redirect()->route('groupe.index');
    }

    public function edit(Groupe $groupe) {
        Gate::authorize('update', $groupe);
        return view('groupes.edit' , ['groupe' => $groupe]);
    }

    public function update(Request $request, Groupe $groupe) {
        Gate::authorize('update', $groupe);
        $data = $request->validated();
        $groupe->fill($data);
        $groupe->save();
        return redirect()->route('groupe.index');
    }

    public function destroy(Groupe $groupe) {
        Gate::authorize('delete', $groupe);
        $groupe->delete();
        return redirect()->route('groupe.index');
    }
}
