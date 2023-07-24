<?php

namespace Database\Seeders;

use App\Models\Cycle;
use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cycle=Cycle::where("libelle","Elementaire")->first();
        Niveau::insert([
            [ "libelle"=>"CI","cycle_id"=>$cycle->id],
            [ "libelle"=>"CP","cycle_id"=>$cycle->id],
            [ "libelle"=>"CE1","cycle_id"=>$cycle->id],
            [ "libelle"=>"CE2","cycle_id"=>$cycle->id],
            [ "libelle"=>"CM1","cycle_id"=>$cycle->id],
            [ "libelle"=>"CM2","cycle_id"=>$cycle->id],
            
        ]);
         $cycle=Cycle::where("libelle","Moyen")->first();
        Niveau::insert([
            [ "libelle"=>"6ieme","cycle_id"=>$cycle->id],
            [ "libelle"=>"5ieme","cycle_id"=>$cycle->id],
            [ "libelle"=>"3ieme","cycle_id"=>$cycle->id],
            [ "libelle"=>"4ieme","cycle_id"=>$cycle->id], 
        ]);

        $cycle=Cycle::where("libelle","Secondaire")->first();
        Niveau::insert([
            [ "libelle"=>"2nde","cycle_id"=>$cycle->id],
            [ "libelle"=>"1ere","cycle_id"=>$cycle->id],
            [ "libelle"=>"Tle","cycle_id"=>$cycle->id],
        ]);
    }
}