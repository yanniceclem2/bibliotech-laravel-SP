<?php

namespace Database\Factories;

use App\Models\Salle;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalleFactory extends Factory
{
    protected $model = Salle::class;

    public function definition()
    {
        $types = ['lecture', 'réunion', 'multimédia', 'archives'];

        return [
            'nom' => $this->faker->unique()->bothify('Salle ?###'),
            'etage' => $this->faker->numberBetween(0, 5),
            'capacite' => $this->faker->numberBetween(1, 200),
            'type' => $this->faker->randomElement($types),
            'disponible' => $this->faker->boolean(80),
        ];
    }
}
