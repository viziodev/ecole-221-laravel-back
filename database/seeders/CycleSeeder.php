<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cycle::insert([
            [
                'libelle' => 'Elementaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'libelle' => 'Secondaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'libelle' => 'Moyen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}