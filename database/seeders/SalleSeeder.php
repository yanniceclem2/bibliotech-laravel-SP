<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salle;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée une salle fixe puis d'autres via la factory pour les tests
        if (! Salle::where('nom', 'Salle A101')->exists()) {
            Salle::create([
                'nom' => 'Salle A101',
                'etage' => 1,
                'capacite' => 30,
                'type' => 'réunion',
                'disponible' => true,
            ]);
        }

        // Crée des salles supplémentaires via factory pour arriver à 10 au total
        $current = Salle::count();
        $toCreate = max(0, 10 - $current);
        if ($toCreate > 0) {
            Salle::factory()->count($toCreate)->create();
        }
    }
}
