<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cour>
 */
class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $date = now()->addMinutes(rand(1, 3600));
        return [
            'name' => fake()->name(),
             'debut' => $date,
             'fin' =>  $date->clone()->addMinutes((60)),
        ];
    }
}
