<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $formations = Formation::all()->pluck("id");



        Student::factory(10)->state( new Sequence( 
            fn($sequence) => ['formation_id' => $formations->random()], 
        ))->create();
    }
}
