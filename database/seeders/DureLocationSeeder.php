<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DureLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dure_locations')->insert([
            [
                'libelle' => "Journée",
                'valeur_en_heure' => 24
            ],
            [
                'libelle' => "Demi-journée",
                'valeur_en_heure' => 12
            ]
        ]);
    }
}
