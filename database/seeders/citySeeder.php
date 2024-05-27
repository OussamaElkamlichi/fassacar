<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            'Casablanca',
            'Rabat',
            'Marrakech',
            'Fès',
            'Tanger',
            'Agadir',
            'Oujda',
            'Kenitra',
            'Nador',
            'Safi',
        ];
        

        foreach ($villes as $ville) 
        {
            DB::table('cities')->insert([
                'name' => $ville,
            ]);
        }
    }
}
