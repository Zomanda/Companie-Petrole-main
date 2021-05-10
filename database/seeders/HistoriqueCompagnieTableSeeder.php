<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriqueCompagnieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historiquecompagnie')->insert([ 
            [
                'nomCompagnie' => 'Alcan',
                'annee' => 2021,
                'capaciteProd' => 534,
                'prodReelle' => 200,
            ],
            ]);
    }
}
