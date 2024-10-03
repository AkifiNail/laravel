<?php

namespace Database\Seeders;

use App\Models\Cour;
use App\Models\Groupe;
use App\Models\Formation;
use App\Models\Student;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $groupes = Groupe::all()->pluck("id");
        $cours = Cour::all()->pluck("id");
        $formations = Formation::all()->pluck("id");

        Cour::factory(10)->state( new Sequence( 
            fn($sequence) => ['formation_id' => $formations->random(), 'groupe_id' => $groupes->random()]
        ))
        ->create();
    }
}
