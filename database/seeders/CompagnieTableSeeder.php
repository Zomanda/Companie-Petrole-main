<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompagnieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnie')->insert([ 
            [
                'nomCompagnie' => 'Alcan',
                'revenuAnnuel' => 10000,
                'capaciteProd' => 534,
                'nbEmploye' => 342,
                'prodReel' => 200,
            ],
            ]);
    }
}
