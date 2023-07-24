<?php

namespace Database\Seeders;

use App\Models\AnneeScolaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnneeScolaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnneeScolaire::insert([
            ["libelle"=>"2022-2023","etat"=>true] , 
            ["libelle"=>"2021-2022","etat"=>false],
            ["libelle"=>"2020-2021","etat"=>false]
        ]);
    }
}